<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class CountryStateController extends Controller
{
    
public function country(Request $request)
{
    // Get all countries
    $ContryList = Country::orderBy('id', 'desc')->get();

    // Handle POST request
    if ($request->isMethod('post')) {
        $request->validate([
            'name' => 'required|string|max:255|unique:country,name',
        ]);

        Country::create([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Country added successfully!');
    }

    // Return view with country list
    return view('backend.country.setting', compact('ContryList'));
}


     public function state(Request $request)
    {
       $stateList =State::latest()->get();
        $countryList=Country::get();
        
      
        if ($request->isMethod('post')) {
        $request->validate([
          
            'name'       => 'required|string|max:255|unique:states,name',
        ]);

        State::create([
            'country_id' => $request->country_id,
            'name'       => $request->name,
        ]);

        return redirect()->back()->with('success', 'State added successfully!');
    }
    
        return view('backend.state.setting',compact('countryList','stateList'));
    }
}


