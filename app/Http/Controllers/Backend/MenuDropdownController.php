<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebsiteMenu;
use App\Models\WebsiteMenuDropdown;
use Illuminate\Http\Request;

class MenuDropdownController extends Controller
{
    public function create(Request $request)
    {

        if ($request->isMethod('post')) {
            
           
            
            WebsiteMenuDropdown::create([
                "title" => $request->title,
                "icon" => $request->icon,
                "menu_id" => $request->menu_id,
               
             
            ]);

            return back();
        }



        $menu = WebsiteMenu::where('category', 1)->get();

        $records = WebsiteMenuDropdown::latest()->get();
        return view(
            'backend.menu-dropdown.create',
            compact('menu', 'records')
        );
    }

    public function submenuItems(Request $request)
    {

        if ($request->isMethod('post')) {
            WebsiteMenuDropdown::create([
                "title" => $request->title,
                "icon" => $request->icon,
                "menu_id" => $request->menu_id,

            ]);

            return back();
        }



        $menu = WebsiteMenu::where('category', 1)->get();

        $records = WebsiteMenuDropdown::latest()->get();
        return view(
            'backend.menu-dropdown.create',
            compact('menu', 'records')
        );
    }
    
    public function submenuItemsUpdate(Request $request,$id)
    {
        $menus=WebsiteMenu::get();
        $menu=WebsiteMenuDropdown::where('id',$id)->first();
      
               


        
         if ($request->isMethod('post')) {
             
               $request->validate([
               
                'icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            
if(!empty( $request->icon_image))
{
            $imageName =$request->title.time() . '.' . $request->icon_image->extension();
            
            $request->icon_image->move(public_path('submenu-icon'), $imageName);
}
else
{
      $imageName=$menu->icon_image;
        
}

            WebsiteMenuDropdown::where('id',$id)->update([
                "title" => $request->title,
                "icon" => $request->icon,
                "menu_id" => $request->menu_id,
                "icon_image"=>$imageName

            ]);
            
            
            return back()->with("success","Submenu Has Been Updated successfully");
}

return view('backend.menu-dropdown.edit',compact('menu','menus'));
            
        
    }
    
}
