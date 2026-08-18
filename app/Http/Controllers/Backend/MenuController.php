<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteMenu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            WebsiteMenu::create([
                "title" => $request->title,
                "icon" => $request->icon,
                "category" => $request->category,
            ]);

            return back();
        }

        $records = WebsiteMenu::latest()->get();
        return view(
            'backend.menu.create',
            compact('records')
        );
    }
}
