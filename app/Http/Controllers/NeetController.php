<?php

namespace App\Http\Controllers;

use App\Models\NeetRanking;
use Illuminate\Http\Request;
use App\Imports\NeetRankingsImport;
use Maatwebsite\Excel\Facades\Excel;

class NeetController extends Controller
{
    public function importForm()
    {
        return view('admin.rank-prediction.import.neet-form');
    }

    public function import(Request $request)
    {
        $request->validate(['excel_file' => 'required|mimes:xlsx,xls']);
        
        Excel::import(new NeetRankingsImport, $request->file('excel_file'));
        
        return back()->with('success', 'Data imported successfully!');
    }

    public function filterForm()
    {
        return view('admin.rank-prediction.filter');
    }

    public function filter(Request $request)
    {
        $request->validate([
            'min_score1' => 'required|integer|min:0|max:720',
            'max_score1' => 'required|integer|min:0|max:720|gte:min_score1',
            'min_score2' => 'required|integer|min:0|max:720',
            'max_score2' => 'required|integer|min:0|max:720|gte:min_score2',
        ]);

        $results = NeetRanking::where(function ($query) use ($request) {
                $query->whereBetween('opening_neet_ai_score', [$request->min_score1, $request->max_score1])
                      ->orWhereBetween('closing_neet_ai_score', [$request->min_score1, $request->max_score1]);
            })
            ->orWhere(function ($query) use ($request) {
                $query->whereBetween('opening_neet_ai_score', [$request->min_score2, $request->max_score2])
                      ->orWhereBetween('closing_neet_ai_score', [$request->min_score2, $request->max_score2]);
            })
            ->get();

        return view('admin.rank-prediction.results', compact('results'));
    }
}
