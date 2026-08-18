<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MegaMenuDropdown;
use App\Models\WebsiteMenu;
use Illuminate\Http\Request;
use DB;

class MegaMenuDropdownController extends Controller
{
    public function create(Request $request)
    {

        if ($request->isMethod('post')) {
            MegaMenuDropdown::create([

                "menu_id" => $request->menu_id,
                "title" => $request->title,
                "icon" => $request->icon,
                "category_id" => 0


            ]);

            return back();
        }


 $pageList=DB::table('pages')->latest()->get();
        $menu = WebsiteMenu::where('category', 2)->get();
        $submenu = MegaMenuDropdown::where('category_id', 0)->get();

        $records = MegaMenuDropdown::latest()->get();
        return view(
            'backend.mega-menu-dropdown.create',
            compact('menu', 'submenu', 'records','pageList')
        );
    }


    public function createSubmenu(Request $request)
    {





      if ($request->isMethod('post')) {
    foreach ($request->title as $index => $title) {
        MegaMenuDropdown::create([
            'title' => $title,
            'icon' => $request->icon[$index],
            'category_id' => $request->menu_id[$index],
            'page_id' => $request->page_id[$index],
        ]);
    }
    return back();
}



        $pageList=DB::table('pages')->orderBy('id','desc')->get();
        
        
        $menu = WebsiteMenu::where('category', 2)->latest()->get();
        $submenu = MegaMenuDropdown::where('category_id', 0)->latest()->get();

        $records = MegaMenuDropdown::latest()->get();
        return view(
            'backend.mega-menu-dropdown.create',
            compact('menu', 'submenu', 'records','pageList')
        );
    }
}
