<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MegaMenuDropdown;
use App\Models\WebsiteMenu;

use App\Models\WebsiteMenuDropdown;

use App\Models\Widget;

use App\Models\Category;

use App\Models\Subcategory;

use App\Models\Page;

use App\Models\Contact;

use App\Models\College;

use App\Models\Blog;

use App\Models\Notification;

use App\Models\CutOffEnquiryModel;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
use DB;
use App;
use Twilio\Rest\Client;

class WebsiteController extends Controller
{

    public $script;

    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
    }



   
public function LandingPageUgPgCourse(Request $request)
{
     if ($request->isMethod('post')) {


            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
            ]);



            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "neet_score" => $request->neet_score,
                "course" => "MD/MS"
            ];

            DB::table('enquiery')->insert($data);

            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');

            return back();
        }

        $footermenu = $this->NavbarFooter();
        $widget = Widget::where('widget_category', 1)->get();
        return view('frontend/page/ugpgcourses', compact('widget', 'footermenu'), ["script" => ""]);
}


    public function LandingPageMDMS(Request $request)
    {

        if ($request->isMethod('post')) {


            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
            ]);



            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "neet_score" => $request->neet_score,
                "course" => "MD/MS"
            ];

            DB::table('enquiery')->insert($data);

            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');

            return back();
        }

        $footermenu = $this->NavbarFooter();
        $widget = Widget::where('widget_category', 1)->get();
        return view('frontend/page/mdms', compact('widget', 'footermenu'), ["script" => ""]);
    }





    public function LandingPageMBBS(Request $request)
    {

        if ($request->isMethod('post')) {
            if ($request->lang) {
                App::setLocale($request->lang);
                session()->put('locale', $request->lang);
            }
            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
            ]);



            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "neet_score" => $request->neet_score,
                "course" => "MBBS"
            ];

            DB::table('enquiery')->insert($data);

            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');

            return back();
        }

        $footermenu = $this->NavbarFooter();
        $widget = Widget::where('widget_category', 1)->get();
        return view('frontend/page/mbbs', compact('widget', 'footermenu'), ["script" => ""]);
    }


    public function LandingPageContactUs(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
            ]);



            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "neet_score" => $request->neet_score,
                "course" => "PG Courses",
                "message" => $request->message,
            ];

            DB::table('enquiery')->insert($data);


            if (Mail::to('ceobanodoctor@gmail.com')->send(new ContactMail($data))) {
                echo "email sent";
            } else {
                echo "have error";
            }



            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');

            return back();
        }

        $footermenu = $this->NavbarFooter();
        $widget = Widget::where('widget_category', 1)->get();
        return view('frontend/page/contact', compact('widget', 'footermenu'), ["script" => ""]);
    }




    public function LandingPageMDS(Request $request)
    {

        if ($request->isMethod('post')) {

            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|numeric|digits:10',
            ]);



            $data = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "neet_score" => $request->neet_score,
                "course" => "MDS"
            ];

            DB::table('enquiery')->insert($data);

            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');

            return back();
        }



        $footermenu = $this->NavbarFooter();
        $widget = Widget::where('widget_category', 1)->get();
        return view('frontend/page/mds', compact('widget', 'footermenu'), ["script" => ""]);
    }



    public function NvabarMenu()
    {
        $menu = WebsiteMenu::where('id', '!=', 9)->orderBy('orders')->get();

        $WebpageMenu = '';




        foreach ($menu as $item) {



            if ($item->category == 0) {

                $page = Page::where('id', $item->page_id)->first();
                if (!empty($page->slug)) {
                    $url = url($page->slug);
                } else {
                    $url = "#" . $page->slug;
                }

                // <li><a href="{{url('/')}}">Home</a></li>

                $WebpageMenu .= '<li>
                        <a href="' . $url . '" >' . $item->title

                    . '</a></li>';
            }


            if ($item->category == 1) {




                $dropdowns = WebsiteMenuDropdown::where('menu_id', $item->id)->get();
                $WebpageMenu .= '<li >
                        <a href="#' . $item->title . '" area-label="' . $item->title . '"> ' . $item->title . '</a>
                     <ul class="nav-dropdown">';

                foreach ($dropdowns as $submenu) {

                    $page = Page::where('id', $submenu->page_id)->first();
                    if (!empty($page->slug)) {
                        $url = url($page->slug);
                    } else {
                        $url = "";
                    }

                    $WebpageMenu .=
                        '<!-- item -->
       
                <li><a href="' . $url . '"> ' . $submenu->title . '</a></li>


           



       
        <!-- end of item -->';
                }

                $WebpageMenu .= '</ul></li>';
            }

            if ($item->category == 2) {


                $dropdowns = MegaMenuDropdown::where('menu_id', $item->id)
                    ->where('category_id', 0)
                    ->get();


                /*           <li>
              <a href="#">Mega Menu 2</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="#">Title Name</a></li>
                    <li><a href="#" target="_blank">Link 1</a></li>
                    <li><a href="#" target="_blank">Link 2</a></li>
                    <li><a href="#" target="_blank">Link 3</a></li>
                    <li><a href="#" target="_blank">Link 4</a></li>
                    <li><a href="#" target="_blank">Link 5</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="#">Title Name</a></li>
                    <li><a href="#" target="_blank">Link 1</a></li>
                    <li><a href="#" target="_blank">Link 2</a></li>
                    <li><a href="#" target="_blank">Link 3</a></li>
                    <li><a href="#" target="_blank">Link 4</a></li>
                    <li><a href="#" target="_blank">Link 5</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="#">Title Name</a></li>
                    <li><a href="#" target="_blank">Link 1</a></li>
                    <li><a href="#" target="_blank">Link 2</a></li>
                    <li><a href="#" target="_blank">Link 3</a></li>
                    <li><a href="#" target="_blank">Link 4</a></li>
                    <li><a href="#" target="_blank">Link 5</a></li>
                  </ul>
                  <ul class="megamenu-list list-col-4">
                    <li class="megamenu-list-title"><a href="#">Title Name</a></li>
                    <li><a href="#" target="_blank">Link 1</a></li>
                    <li><a href="#" target="_blank">Link 2</a></li>
                    <li><a href="#" target="_blank">Link 3</a></li>
                    <li><a href="#" target="_blank">Link 4</a></li>
                    <li><a href="#" target="_blank">Link 5</a></li>
                  </ul>
                </div>
              </div>
            </li>*/


                $WebpageMenu .= '<li>
              <a href="#">' . $item->title . '</a>
              <div class="megamenu-panel">
                <div class="megamenu-lists">';




                foreach ($dropdowns as $megamenu) {








                    $WebpageMenu .=
                        '<!-- item -->
                 
         <ul class="megamenu-list list-col-4"><span class="text-info text-uppercase m-3 pb-3">' . $megamenu->title . '</span>';


                    $submenuitems = MegaMenuDropdown::where('category_id', $megamenu->id)->get();
                    foreach ($submenuitems as $submenu_item) {



                        $page = Page::where('id', $submenu_item->page_id)->first();
                        if (!empty($page->slug)) {
                            $url = url($page->slug);
                        } else {
                            $url = "";
                        }
                        $WebpageMenu .= '<li><a href="' . $url . '">' . $submenu_item->title . '</a></li>';
                    }

                    $WebpageMenu .= '</ul>
                  
        <!-- end of item -->';
                }

                $WebpageMenu .= '</li>';
            }
        }

        $WebpageMenu .= '<li>
                        <a href="' . url('/colleges/list-of-colleges-for-medical-courses') . '" ><span class="live-onboarding-button-css"><i class="fa-solid fa-arrow-right"></i>
                  
List Of Colleges</span>
                    </a></li>';




        /* $WebpageMenu .= '<li>
                        <a href="https://us05web.zoom.us/j/4128230451?pwd=MXhnck1tV1NueHVoQk9hMXhOdkdCQT09" ><span class="live-onboarding-button-css"><i class="fa-solid fa-arrow-right"></i>
                  
Live Onboard Counselling</span>
                    </a></li>';*/


        return $WebpageMenu;
    }


// public function NvabarMenu()
// {
//     $menu = WebsiteMenu::where('id', '!=', 9)->orderBy('orders')->get();
//     $WebpageMenu = '';

//     foreach ($menu as $item) {

//         // Simple link
//         if ($item->category == 0) {
//             $page = Page::find($item->page_id);
//             $url = !empty($page?->slug) ? url($page->slug) : '#';
//             $WebpageMenu .= '<li><a href="' . $url . '">' . $item->title . '</a></li>';
//         }

//         // Dropdown menu
//         elseif ($item->category == 1) {
//             $dropdowns = WebsiteMenuDropdown::where('menu_id', $item->id)->get();
//             $WebpageMenu .= '<li><a href="#' . $item->title . '">' . $item->title . '</a><ul class="nav-dropdown">';
//             foreach ($dropdowns as $submenu) {
//                 $page = Page::find($submenu->page_id);
//                 $url = !empty($page?->slug) ? url($page->slug) : '#';
//                 $WebpageMenu .= '<li><a href="' . $url . '">' . $submenu->title . '</a></li>';
//             }
//             $WebpageMenu .= '</ul></li>';
//         }

//         // Mega menu
//         elseif ($item->category == 2) {
//             $WebpageMenu .= '<li>
//                 <a href="#">' . $item->title . '</a>
//                 <div class="megamenu-panel">
//                     <div class="megamenu-lists">';

//             // Parent categories of mega menu
//             $megaParents = MegaMenuDropdown::where('menu_id', $item->id)
//                 ->where('category_id', 0)
//                 ->get();

//             foreach ($megaParents as $parent) {
//                 // Limit child items to max 10
//                 $submenuItems = MegaMenuDropdown::where('category_id', $parent->id)
//                     ->limit(10)
//                     ->get();

//                 if ($submenuItems->count()) {
//                     $WebpageMenu .= '<ul class="megamenu-list list-col-4">';
//                     $WebpageMenu .= '<li class="megamenu-list-title"><a href="#">' . $parent->title . '</a></li>';

//                     foreach ($submenuItems as $child) {
//                         $page = Page::find($child->page_id);
//                         $url = !empty($page?->slug) ? url($page->slug) : '#';
//                         $WebpageMenu .= '<li><a href="' . $url . '">' . $child->title . '</a></li>';
//                     }

//                     $WebpageMenu .= '</ul>';
//                 }
//             }

//             $WebpageMenu .= '</div></div></li>';
//         }
//     }

//     // Final static item
//     $WebpageMenu .= '<li>
//         <a href="' . url('/colleges/list-of-colleges-for-medical-courses') . '">
//             <span class="live-onboarding-button-css"><i class="fa-solid fa-arrow-right"></i> List Of Colleges</span>
//         </a>
//     </li>';

//     return $WebpageMenu;
// }


    public function NavbarFooter()
    {
        $WebpageMenu = '';




        $WebpageMenu .= '<div class="col-lg-3 col-xl-3"><h5  class="text-white">Study In India</h5>';
        $WebpageMenu .= '<ul class="footer-nav">';





        $submenuitems = MegaMenuDropdown::where('menu_id', 0)->take(17)->get();
        foreach ($submenuitems as $submenu_item) {



            $page = Page::where('id', $submenu_item->page_id)->first();
            if (!empty($page->slug)) {
                $url = url($page->slug);
            } else {
                $url = "javascript void(0);";
            }
            $WebpageMenu .= '<li><a href="' . $url . '">' . $submenu_item->title . '</a></li>';
        }






        $WebpageMenu .= '</ul>';

        $WebpageMenu .= '</div>';


        $WebpageMenu .= '<div class="col-lg-3 col-xl-3"><h5  class="text-white">Study In Abroad</h5>';
        $WebpageMenu .= '<ul class="footer-nav">';





        $submenuitems = MegaMenuDropdown::where('menu_id', 0)->where('show_in_footer', 1)->take(17)->get();
        foreach ($submenuitems as $submenu_item) {



            $page = Page::where('id', $submenu_item->page_id)->first();
            if (!empty($page->slug)) {
                $url = url($page->slug);
            } else {
                $url = "javascript void(0);";
            }
            $WebpageMenu .= '<li><a href="' . $url . '"> ' . $submenu_item->title . '</a></li>';
        }






        $WebpageMenu .= '</ul>';

        $WebpageMenu .= '</div>';










        $WebpageMenu .= '<div class="col-lg-6 col-xl-6">';





        $WebpageMenu .= '<h5  class="text-white">Latest Notifications </h5>
                        
                           <ul class="footer-nav">';



        $menu = Notification::latest()->get()->take(7);
        foreach ($menu as $item) {





            $WebpageMenu .=
                '<!-- item -->
      
                <li><a href="' . url('news/' . $item->slug) . '">' . $item->title . '</a></li>


           



       
        <!-- end of item -->';
        }
        $WebpageMenu .= '</ul>';

        $WebpageMenu .= '<h6 class="text-white">Latest Blog Post  </h6>';

        $WebpageMenu .= '<ul class="footer-nav">';



        $menu = Blog::latest()->get()->take(7);
        foreach ($menu as $item) {





            $WebpageMenu .=
                '<!-- item -->
      
                <li><a href="' . url('blog/' . $item->slug) . '">' . $item->title . '</a></li>


           



       
        <!-- end of item -->';
        }
        $WebpageMenu .= '</ul>';

        $WebpageMenu .= '</div>';


        return $WebpageMenu;
    }







    public function Widget()
    {
        $widgets = Widget::where('widget_category', 1)->get();
        return $widgets;
    }

    public function WidgetCountry()
    {
        $widgets = Widget::where('widget_category', 2)->get();
        return $widgets;
    }


    public function Category()
    {
        $category = Category::orderBy('order_record', 'asc')->get();
        $CourseWidget = [];
        foreach ($category as $c) {
            $subcategory = $this->Subcategory($c->id);

            array_push(
                $CourseWidget,
                [
                    "category" => $c,
                    "subcategory" => $subcategory
                ]
            );
        }
        return $CourseWidget;
    }

    public function Subcategory($category)
    {
        $subcategory = Subcategory::where('category_id', $category)->get();
        return $subcategory;
    }

    public function BlogPost()
    {
        $blog = Blog::take(8)->latest()->get();
        return $blog;
    }





    public function homepage()
    {

        return view(
            'frontend.home',
            [
                'menu' => $this->NvabarMenu(),
                'category' => $this->Category(),
                'widget' => $this->Widget(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                'widgetcountry' => $this->WidgetCountry(),

                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('slug', '/')->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', '/')->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('slug', '/')->first(),
                'universities' => College::where('category', 'Deemed Medical College')->limit(10)->get(),
                'colleges' => College::where('image', '!=', '')->orderBy('state')->limit(10)->get(),
                'states' => DB::table('states')->select('states.*', 'pages.title as page', 'pages.slug', 'pages.image')->leftJoin('pages', 'pages.id', '=', 'states.page_id')->get(),
                'services' => $this->services(),
                'admissions' => $this->admissions(),
                'reviews' => $this->GetReview(),
                'collegeList' => $this->ListofColleges(),
                'script' => ""

            ]

        );
    }


    public function aboutUs()
    {
        return view(
            'frontend.about',
            [
                'menu' => $this->NvabarMenu(),
                'page' => Page::where('slug', 'about-us')->first(),
                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('slug', 'about-us')->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', 'about-us')->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('slug', 'about-us')->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                "script" => ""

            ]

        );
    }

    public function contactUs(Request $request)
    {
        if ($request->isMethod('post')) {

            // $data = [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'phone' => $request->phone,
            //     'course' => $request->course,
            //     'message' => $request->message
            // ];
            
            
            $data = [
    'name' => $request->name,
  
    'phone' => $request->phone,
    'course' => $request->course,
    'message' => $request->message,
];

// Conditionally add NEET score if present
if ($request->filled('neet_score')) {
    $data['neet_score'] = $request->neet_score;
}


// Conditionally add NEET score if present
if ($request->filled('email')) {
    $data['email'] = $request->email;
}


            Contact::create($data);


            if (Mail::to('ceobanodoctor@gmail.com')->send(new ContactMail($data))) {
                echo "email sent";
            } else {
                echo "have error";
            }




            session()->flash('success', '<h5>Thanking you to send us message</h5> <p> Your message has been sent successfully. We will response you soon!</p>');
            return back();
        }

        return view(
            'frontend.contact',
            [
                'menu' => $this->NvabarMenu(),
                'page' => Page::where('slug', 'contact-us')->first(),
                'category' => $this->Category(),
                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('slug', 'contact-us')->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', 'contact-us')->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('slug', 'contact-us')->first(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                "script" => ""
            ]
        );
    }



public function SinglePage($slug)
{
    $FeeStructure = "";

    $content = Page::where('slug', $slug)->first();

    if (!$content) {
        abort(404);
    }

    $otherPages = [];

    if ($content->page_type == 'country') {
        $otherPages = Page::whereNotNull('country')
            ->whereNull('state')
            ->where('id', '!=', $content->id)
            ->where('course', $content->course)
            ->get();
    }

    if ($content->page_type == 'state') {
        $otherPages = Page::where('country', $content->country)
            ->where('id', '!=', $content->id)
            ->where('course', $content->course)
            ->whereNotNull('state')
            ->get();
    }

    $class = "collapse show";

    // ✅ Dynamically check if any fee_structure exists for this page
    
    $records = DB::table('fee_structure')->where('page_id', $content->id)->get();

    if ($records->count() > 0) {
      
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
       
    }

    // ✅ Special cases with no page_id match — keep manually
    if ($content->slug == "study-bams-in-india") {
        $records = DB::table('fee_structure')->where("course", "BAMS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-mbbs-in-india" || $content->slug == "mbbs-in-india") {
        $records = DB::table('fee_structure')->where("course", "MBBS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-mdms-in-india") {
        $records = DB::table('fee_structure')->where("course", "MD/MS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-ayurveda-pg-in-india") {
        $records = DB::table('fee_structure')->where("course", "Ayurveda")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-unani-pg-in-india") {
        $records = DB::table('fee_structure')->where("course", "Unani")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-bums-in-india") {
        $records = DB::table('fee_structure')->where("course", "BUMS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-bhms-in-india") {
        $records = DB::table('fee_structure')->where("course", "BHMS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    if ($content->slug == "study-bds-in-india") {
        $records = DB::table('fee_structure')->where("course", "BDS")->get();
        foreach ($records as $r) {
            $FeeStructure .= "<h3 class='mt-5'>" . $r->table_name . "</h3>" . $r->table_post;
        }
    }

    return view('frontend.singlepage', [
        'menu' => $this->NvabarMenu(),
        'pageLinks' => $this->pageLinks(),
        'page' => $content,
        'footermenu' => $this->NavbarFooter(),
        'category' => $this->Category(),
        'blog' => $this->BlogPost(),
        'seo_meta_title' => Page::select('seo_meta_title')->where('slug', $slug)->first(),
        'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', $slug)->first(),
        'seo_meta_description' => Page::select('seo_meta_description')->where('slug', $slug)->first(),
        'canonical_link' => Page::select('canonical_link')->where('slug', $slug)->first(),
        'feeStructure' => $FeeStructure,
        'widget' => $this->Widget(),
        'collegeList' => $this->ListofColleges(),
        'all_news' => Notification::latest()->get(),
        'blogs' => $this->BlogPost(),
        'script' => $this->faqScript($content->id, 'page'),
        'faqLayOut' => $this->faqLayOut($content->id, 'page'),
        'otherPages'=>$otherPages
    ]);
}

    public function FeeSructureTelangana($class)
    {

        $feestructure = DB::table("state_telangana")->where('type', 'all')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_telangana">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_telangana" aria-expanded="false" aria-controls="state_telangana">
			Fee Structure Of Medical Colleges In Telangana
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="state_telangana" class="accordion-collapse collapse' . $class . '" aria-labelledby="state_telangana"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_telangana" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th scope="col">College Name</th>
						<th scope="col">A Category Fee</th>
						<th scope="col">B Category Fee</th>
						<th scope="col">NRI Fee</th>
						
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td data-label='College Name'>" . $fee->college_name . "</td>
						<td data-label='A Category Fee'>" . $fee->fee_category_a . "</td>
						<td data-label='B Category Fee'>" . $fee->fee_category_b . "</td>
						<td data-label='NRI Fee'>" . $fee->fee_category_nri . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>";

        $feestructure = DB::table("state_telangana")->where('type', 'minority')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="mt-3"><h3>Fee Structure Of Medical Colleges In Telangana For Minority</h3>';


        $stateFee .= '<table id="table_state_telangana_minority" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th scope="col">College Name</th>
						<th scope="col">A Category Fee</th>
						<th scope="col">B Category Fee</th>
						<th scope="col">NRI Fee</th>
						
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td data-label='College Name'>" . $fee->college_name . "</td>
						<td data-label='A Category Fee'>" . $fee->fee_category_a . "</td>
						<td data-label='B Category Fee'>" . $fee->fee_category_b . "</td>
						<td data-label='NRI Fee'>" . $fee->fee_category_nri . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
           </div>
	</div>
	</div>
</div>	";







        return $stateFee;
    }


    public function FeeSructureBHMS($class)
    {

        $feestructure = DB::table("course_bhms")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bahs">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bhms" aria-expanded="false" aria-controls="course_bhms">
			Fee Structure Of Medical Colleges In Karnataka for BHMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bhms" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bhms"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_course_bhms" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th scope="col">College Name</th>
					
						<th scope="col">Govt. Fee</th>
						<th scope="col">Private Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td data-label='College Name'>" . $fee->college_name . "</td>
						
						<td data-label='Govt. Fee'>" . $fee->tution_fee_govt . "</td>
						<td data-label='Private Fee'>" . $fee->tution_fee_private . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";


        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingbhms_gujrat">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bhms_gujrat" aria-expanded="false" aria-controls=bhms_gujrat">
			Fee Structure Of Medical Colleges In GUJRAT for BHMS
		</button>
	</h5>
	<div id="bhms_gujrat" class="accordion-collapse collapse' . $class . '" aria-labelledby="bhms_gujrat"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">

<h5> (Note-Choice filling facilty available for all colleges but seat allotment will be done only if College get the Ayush ministry permission and University 
affiliation prior to the seat allotment scheduled time.)
       </h5>

<table>
    <tr>
        <td>Sr.No</td>
        <td>Name Of College</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2021-22</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2021-22</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2022-23</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2022-23</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2023-24</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2023-24</td>
 
    <tr>
        <td>1</td>
        <td>Ahmedabad Homoeopathy College, Ghuma,Ahmedabad</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Arihant Homoeopathic Medical College Research Institute, Gandhinagar</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>
    </tr>
    <tr>
        <td>3</td>
        <td>AaryaVeer Homoeopathy Medical College,Rajkot</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Ananya College Of Homoeopathy,Kalol</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Baroda Homoeopathy College,Vadodara</td>
        <td>1.00</td>
        <td>1.82</td>
        <td>1.00</td>
        <td>1.82</td>
        <td>1.00</td>
        <td>1.82</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Bhargava Homeopathy Medical College,Anand</td>
        <td>0.85</td>
        <td>1.20</td>
        <td>0.85</td>
        <td>1.20</td>
        <td>0.85</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>7</td>
        <td>C. D. Pachigar Homoeopatheic Medical College, Surat</td>
        <td>0.70</td>
        <td>0.70</td>
        <td>0.70</td>
        <td>0.70</td>
        <td>0.70</td>
        <td>0.70</td>
    </tr>
    <tr>
        <td>8</td>
        <td>C. N. Kothari Homeopathy Co1lege,Surat</td>
        <td>0.99</td>
        <td>1.55</td>
        <td>0.99</td>
        <td>1.55</td>
        <td>0.99</td>
        <td>1.55</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Gandhinagar Homoeopathic Medical College,Gandhinagar</td>
        <td>0.81</td>
        <td>1.20</td>
        <td>0.81</td>
        <td>1.20</td>
        <td>0.81</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Jawaharlal Nehru Homoeopatheie Medical College,Waghodia</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Jay jalaram Homeopathic Medical College,Panchmahal</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Kamdar Homoeopathic Modicai College,Rajkot</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>13</td>
        <td>L. R. Shah Homeopathy College, Rajkot</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>I.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Laxmiben Homeopathy Institute and Research Centre, Bhandu,</td>
        <td>0.84</td>
        <td>1.04</td>
        <td>0.84</td>
        <td>1.04</td>
        <td>0.84</td>
        <td>1.04</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Limbdi Homeopathic Medical College and Hospital, Limbdi</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Merchant Homeopathic Medical CoIlege,Mehsana</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Noble Homoeopathic Medical College.Junagadh</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Parul Institute Of Homeopathy & Research,Vadodara</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Pioneer Homeopathic Medical College,Vadodara</td>
        <td>0.84</td>
        <td>1.04</td>
        <td>0.84</td>
        <td>1.04</td>
        <td>0.84</td>
        <td>1.04</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Rajkot Homoeopathy College, Rajkot</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
        <td>0.80</td>
        <td>1.20</td>
    </tr>
    <tr>
        <td>21</td>
        <td> S S. Agrawal Homeopathic Medical College, Navsari</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
        <td>0.90</td>
        <td>1.35</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Shree B. A. Dangar Homeopathy college, Rajkot</td>
        <td>0.71</td>
        <td>1.21</td>
        <td>0.71</td>
        <td>1.21</td>
        <td>0.71</td>
        <td>1.21</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Shee H N. Shukla Homoeopathic College,Rajkot</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>
        <td>1.15</td>
        <td>1.55</td>

            <tr>
                <td>24</td>
                <td>Shree Mahalaxmiji Mahila Homeopathy Medical College,Vadodara</td>
                <td>0.90</td>
                <td>1.35</td>
                <td>0.90</td>
                <td>1.35</td>
                <td>0.90</td>
                <td>1.35</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Shree Shamlaji Homeopathy Medical College,Godhra</td>
                <td>1.00</td>
                <td>1.50</td>
                <td>1.00</td>
                <td>1.50</td>
                <td>1.00</td>
                <td>1.50</td>
            </tr>
            <tr>
                <td>26</td>
                <td>Shree Swaminarayan Homeopathic College. Kalol</td>
                <td>1.15</td>
                <td>1.55</td>
                <td>1.15</td>
                <td>1.55</td>
                <td>1.15</td>
                <td>1.55</td>
            </tr>
            <tr>
                <td>27</td>
                <td>Shri B.G. Garaiya Homoeopathic Medical College. Rajkot</td>
                <td>1.01</td>
                <td>1.73</td>
                <td>1.01</td>
                <td>1.73</td>
                <td>1.01</td>
                <td>1.73</td>
            </tr>
            <tr>
                <td>28</td>
                <td>Smt. Malini Kishore Sanghvi Horrieopathic Medical College.Batoda</td>
                <td>1.15</td>
                <td>1.84</td>
                <td>1.15</td>
                <td>1.84</td>
                <td>1.15</td>
                <td>1.84</td>
            </tr>
            <tr>
                <td>29</td>
                <td>Smt. Vasantaben N. Vyas Homoeopathy Medical College, Amreli</td>
                <td>0.80</td>
                <td>1.00</td>
                <td>0.80</td>
                <td>1.00</td>
                <td>0.80</td>
                <td>1.00</td>
            </tr>
            <tr>
                <td>30</td>
                <td>Swami Vivekanand  Homeopathic Medical Co1lege,Bhavnagar</td>
                <td>1.15</td>
                <td>1.55</td>
                <td>1.15</td>
                <td>1.55</td>
                <td>1.15</td>
                <td>1.55</td>
            </tr>
            <tr>
                <td>31</td>
                <td>Vidhyadeep Homoeopathic Medical College,Surat</td>
                <td>0.85</td>
                <td>1.20</td>
                <td>0.85</td>
                <td>1.20</td>
                <td>0.85</td>
                <td>1.20</td>
            </tr>
            <tr>
                <td>32</td>
                <td>Ahmedabad Homoeopathy College. Ahmedabad(MD)</td>
                <td>1.56</td>
                <td>1.85</td>
                <td>1.56</td>
                <td>1.85</td>
                <td>1.56</td>
                <td>1.85</td>
            </tr>
            <tr>
                <td>33</td>
                <td>Baroda Homoeopathv College, Vadodara(MD)</td>
                <td>0.96</td>
                <td>1.44</td>
                <td>0.96</td>
                <td>1.44</td>
                <td>0.96</td>
                <td>1.44</td>
            </tr>
            <tr>
                <td>34</td>
                <td>Jawaharlal Nehru Homoeopatheic Medical College,Waghodia(MD)</td>
                <td>1.70</td>
                <td>1.85</td>
                <td>1.70</td>
                <td>1.85</td>
                <td>1.70</td>
                <td>1.85</td>
            </tr>
            <tr>
                <td>35</td>
                <td>Dr V H Dave FLomoeopathic Medical College and(MD)</td>
                <td>1.15</td>
                <td>1.25</td>
                <td>1.15</td>
                <td>1.25</td>
                <td>1.15</td>
                <td>1.25</td>
            </tr>
            <tr>
                <td>36</td>
                <td>Anand Homeopathic College, Anand (MD)</td>
                <td>0.55</td>
                <td>0.55</td>
                <td>0.55</td>
                <td>0.55</td>
                <td>0.55</td>
                <td>0.55</td>
            </tr>
        </table>
</div>
</div>
</div>';

        $feestructure = DB::table("ug_mp_colleges")->where('type', 'homeopathy')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#ug_mp_colleges" aria-expanded="false" aria-controls="ug_mp_colleges">
			Fee Structure Of Medical Colleges In MP for BHMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="ug_mp_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="ug_mp_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_ug_mp_colleges" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
					
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee . "</td>
						
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";




        $feestructure = DB::table("bhms_rajasthan")->where('type', 'constitute')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingbhms_rajasthan">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bhms_rajasthan" aria-expanded="false" aria-controls="bhms_rajasthan">
			Fee Structure of Medical Colleges In Rajasthan for BHMS

		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="bhms_rajasthan" class="accordion-collapse collapse' . $class . '" aria-labelledby="bhms_rajasthan"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
		
		<h5>RAJASTHAN CONSTITUE COLLEGE OF UNIVERSITY  HOMOEOPATHY COLLEGE</h5>
			<table id="table_bhms_rajasthan" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
					
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee . "</td>
						
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

	";

        $feestructure = DB::table("bhms_rajasthan")->where('type', 'private')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '
	<h5>	
	
	RAJASTHAN HOMOEOPATHY PRIVATE COLLEGE


	
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '
			<table id="table_bhms_rajasthan_private" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
					
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee . "</td>
						
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";





        $feestructure = DB::table("bams_maharashtra")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingbams_maharashtra">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bams_maharashtra" aria-expanded="false" aria-controls="bams_maharashtra">
	Fee Structure of Medical Colleges In Maharashtra for BHMS				

		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="bams_maharashtra" class="accordion-collapse collapse' . $class . '" aria-labelledby="bams_maharashtra"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_bams_maharashtra" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name
</th>
					
					
							<th>Fee

</th>
				
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
					
							<td>" . $fee->tution_fee . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
			</div>
			</div>
			</div>";

        $feestructure = DB::table("course_bums_unani_up")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bahs">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bhms" aria-expanded="false" aria-controls="course_bhms">
			Fee Structure Of Medical Colleges In UTTARPRADESH for BHMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bhms" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bhms"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">';

        $stateFee .= '<table id="table_course_bums_up" style="width:100%">
    <thead style="width:100%">
        <tr style="width:100%">
            <th>महाविद्यालय
            </th>

            <th>सीट
            </th>

            <th>निर्धारित शुल्क

            </th>

        </tr>
    </thead>
    <tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
            <td>" . $fee->college_name . "</td>

            <td>" . $fee->seat . "</td>

            <td>" . $fee->tution_fee . "</td>

        </tr>";
        }

        $stateFee .= "</tbody>
</table>

		</div>
	</div>
</div>";


        return $stateFee;
    }



    public function FeeSructureBAMS($class)
    {

        $feestructure = DB::table("course_bams")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bams">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bams" aria-expanded="false" aria-controls="course_bams">
			Fee Structure Of Medical Colleges In Karnataka for BAMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bams" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bams"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_course_bams" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
						<th>Govt. Fee</th>
						<th>Private Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee_govt . "</td>
						<td>" . $fee->tution_fee_private . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";



        $feestructure = DB::table('fee_structure')->first();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_course_bams_rajasthan">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bams_rajasthan" aria-expanded="false" aria-controls="course_bams_rajasthan">
			Fee Structure Of Medical Colleges In Rajasthan for BAMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bams_rajasthan" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bams_rajasthan"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">';



        $stateFee .= "
			

		</div>
	</div>
</div>";




        $feestructure = DB::table("course_bums_up")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums_up">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bums_up" aria-expanded="false" aria-controls="course_bums_up">
		उत्तर	प्रदेश के निजी क्षेत्र के आयुर्वेद महाविद्यालयों की सूची				

		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bums_up" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bums_up"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_course_bums_up" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>आयुर्वेद
</th>
					
						<th>सीट 
</th>
						<th>N.C.I.S.M से मान्यता प्राप्त होने की तिथि
</th>
							<th>निर्धारित शुल्क

</th>
				
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->seat . "</td>
						<td>" . $fee->registration_date . "</td>
							<td>" . $fee->tution_fee . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
			</div>
			</div>
			</div>";

        $feestructure = DB::table("bams_maharashtra")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingbams_maharashtra">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bams_maharashtra" aria-expanded="false" aria-controls="bams_maharashtra">
	Fee Structure of Medical Colleges In Maharashtra for BAMS				

		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="bams_maharashtra" class="accordion-collapse collapse' . $class . '" aria-labelledby="bams_maharashtra"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
		<h3> (Note-Choice filling facilty available for all colleges but seat allotment will be done only if College get the Ayush ministry permission and University affiliation prior to the seat allotment scheduled time.)
 
 </h3>
 
 
			<table id="table_bams_maharashtra" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name
</th>
					
					
							<th>Fee

</th>
				
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
					
							<td>" . $fee->tution_fee . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
			</div>
			</div>
			</div>";


        $feestructure = DB::table("ug_mp_colleges")->where('type', 'ayurved')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#ug_mp_colleges" aria-expanded="false" aria-controls="ug_mp_colleges">
			Fee Structure Of Medical Colleges In MP for BAMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="ug_mp_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="ug_mp_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_ug_mp_colleges" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
						<th> Fee</th>
						
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee . "</td>
					
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";



        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingbams_gujrat">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bams_gujrat" aria-expanded="false" aria-controls="bams_gujrat">
	Fee Structure of Medical Colleges In Gujrat for BAMS				

		</button>
	</h5>
<div id="bams_gujrat" class="accordion-collapse collapse' . $class . '" aria-labelledby="bams_gujrat"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
		
		 <table>
    <tr>
        <td>SrNo </td>                                            <td>Name Of College</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2021-22</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2021-22</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2022-23</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2022-23</td>
        <td>GOVERNMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2023-24</td>
        <td>MANAGEMENT SEATS FEE FOR THE STUDENTS ADMITTED IN THE YEAR 2023-24</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Ananya College Of Ayurved Kalol Gandhinagar</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
    </tr>
    <tr>
        <td>2</td>
        <td>B. G. Garaiya Ayurved College, Rajkot</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Bhargava Ayurved College. Anand</td>
        <td>2.81</td>
        <td>3.85</td>
        <td>2.81</td>
        <td>3.85</td>
        <td>2.81</td>
        <td>3.85</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Dhanvantari Ayurved College, Koydain (Kajiya)</td>
        <td>2.71</td>
        <td>4.05</td>
        <td>2.71</td>
        <td>4.05</td>
        <td>2.71</td>
        <td>4.05</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Eva College Of Ayurveda.Rajkot</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
    </tr>
    <tr>
        <td>6</td>
        <td>G. J. Patel Ayurved College, Anand</td>
        <td>3.15</td>
        <td>3.15</td>
        <td>3.15</td>
        <td>3.15</td>
        <td>3.15</td>
        <td>3.15</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Globa1 Institute Of Ayurved.Rnjkot</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>8</td>
        <td>lndian Institute Of Ayurved Research Hospital. Rajkot</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
        <td>2.91</td>
        <td>4.50</td>
    </tr>
    <tr>
        <td>9</td>
        <td>J. S. Ayurved Mahavidyalaya, Nadiad</td>
        <td>2.91</td>
        <td>4.97</td>
        <td>2.91</td>
        <td>4.97</td>
        <td>2.91</td>
        <td>4.97</td>
    </tr>
    <tr>
        <td>10</td>
        <td>K. J. Institute Of Ayurved and Research,Vadodam</td>
        <td>2.71</td>
        <td>3.85</td>
        <td>2.71</td>
        <td>3.85</td>
        <td>2.71</td>
        <td>3.85</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Manjusluee Research Institute Of Ayurvedic Science, Gandhinagar</td>
        <td>2.81</td>
        <td>4.50</td>
        <td>2.81</td>
        <td>4.50</td>
        <td>2.81</td>
        <td>4.50</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Murlidhar Ayurved Collegc, Rajkot</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Netra Chikitsa Ayurved College, Amreli</td>
        <td>2.81</td>
        <td>3.85</td>
        <td>2.81</td>
        <td>3.85</td>
        <td>2.81</td>
        <td>3.85</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Noble Ayurved College and Research Insfitute,Junagadh</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Paru1 Institute Of Ayurved.Waghodia,</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>16</td>
        <td>R. K. University Ayurvedic College and Hospital. Rajkot</td>
        <td>2.70</td>
        <td>3.75</td>
        <td>2.70</td>
        <td>3.75</td>
        <td>2.70</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Shree R.M.D. Ayurved College Hospital,  Waghaldhara</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Shree Swaminarayan Ayurved College.Gandhinagar</td>
        <td>2.71</td>
        <td>3.85</td>
        <td>2.71</td>
        <td>3.85</td>
        <td>2.71</td>
        <td>3.85</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Shri V.M. Mehta Institute Of Ayurved, Rajkot</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
        <td>2.71</td>
        <td>3.75</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Krishna Ayurved Medical College, Vadodara</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Arihant Ayurvedic Medical College and Research institute Gandhinagar</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Jay Jalram Ayurvedic Medical CoIlege,Panchmabal</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Gokul Ayurvedic College, Siddhpur</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
        <td>2.25</td>
        <td>3.40</td>
    </tr>
    <tr>
        <td>24</td>
        <td>Parul institute Of Ayurved AndResearch,Waghodia</td>
        <td>2.40</td>
        <td>3.59</td>
        <td>2.40</td>
        <td>3.59</td>
        <td>2.40</td>
        <td>3.59</td>
    </tr>
    <tr>
        <td>25</td>
        <td>J.S. Ayurved Mahavidyalaya, Nadiad(MD)</td>
        <td>4.81</td>
        <td>7.18</td>
        <td>4.81</td>
        <td>7.18</td>
        <td>4.81</td>
        <td>7.18</td>
    </tr>
    <tr>
        <td>26</td>
        <td>Parul Institute Of Ayurved,Waghodiat (MD)</td>
        <td>3.75</td>
        <td>3.75</td>
        <td>3.75</td>
        <td>3.75</td>
        <td>3.75</td>
        <td>3.75</td>
    </tr>
</table>

</div>
</div>
</div>';

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headinguttarakhand_colleges">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#uttarakhand_colleges" aria-expanded="false" aria-controls="uttarakhand_colleges">
			Fee Structure Of Medical Colleges In UTTARAKHAND for BAMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="uttarakhand_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="uttarakhand_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">			
			<table id="fee-structure-uttarakhand-table1" width="100%">
			<thead>
			
    <tr>
        <th>S.NO.</th>
        <th>COLLEGE LOCATION</th>
        <th>COLLEGE</th>
        <th>(1ST YR FEE) – IN LAC</th>
        <th>TOTAL PACKAGE</th>
        <th>TOTAL PACKAGE WITH HOSTEL</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Dehradun</td>
        <td>Uttaranchal Ayurvedic College &amp; Hospital</td>
        <td>₹ 3.30 LAC</td>
        <td>₹ 12.12 LAC</td>
        <td>₹ 17.07 LAC</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Dehradun</td>
        <td>Himalayiya Ayurvedic Medical College &amp; Hospital, Post- Via Doiwala, Jeevanwala, Dehradun.</td>
        <td>₹ 2.5 LAC</td>
        <td>₹ 11.25 LAC</td>
        <td>₹ 14.85 LAC</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Haridwar</td>
        <td>Patanjali Ayurvedic College and Hospital, Haridwar.</td>
        <td>₹ 2.15 LAC</td>
        <td>₹ 9.67 LAC</td>
        <td>₹ 12.37 LAC</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Haridwar</td>
        <td>Quadra Institute of Ayurveda, Roorkee, Haridwar</td>
        <td>₹ 2.45 LAC</td>
        <td>₹ 11.00 LAC</td>
        <td>₹ 14.63 LAC</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Haridwar</td>
        <td>Om Ayurvedic College and Hospital, panchayanpur, daulatpur, Roorkee, Haridwar.</td>
        <td>₹ 2.45 LAC</td>
        <td>₹ 11.00 LAC</td>
        <td>₹ 14.18 LAC</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Dehradun</td>
        <td>DIMS-Doon Institute of Ayurved Faculty medical Sciences, Shankarpur, Shahaspur, Dehradun.</td>
        <td>₹ ₹ 3.42 LAC</td>
        <td>₹ 12.50 LAC</td>
        <td>₹ 17.66 LAC</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Dehradun</td>
        <td>Dev Bhoomi Medical College of Ayurveda and Hospital, Navgaon, Manduwala, Dehradun.</td>
        <td>₹ 3.38 LAC</td>
        <td>₹ 14.42 LAC</td>
        <td>₹ 18.92 LAC</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Dehradun</td>
        <td>Shivalik Institute of Ayurved and Research, near Bansiwala bridge, Jhanjra, Chakrata road, Dehradun</td>
        <td>₹ 3.11 LAC</td>
        <td>₹ 12.38 LAC</td>
        <td>₹ 16.43 LAC</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Haridwar</td>
        <td>Aroma Ayurved Medical College and Hospital, Santarshah, Roorkee, Haridwar</td>
        <td>₹ 2.40 LAC</td>
        <td>₹ 10.50 LAC</td>
        <td>₹ 14.10 LAC</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Udham Singh Nagar</td>
        <td>Surajmal Medical College of Ayurved and Hospital, Kiccha, Udham Singh Nagar</td>
        <td>₹ 2.50 LAC</td>
        <td>₹ 10.20 LAC</td>
        <td>₹ 13.80 LAC</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Haridwar</td>
        <td>Motherhood Ayurvedic and Medical College, bhagwanpur, Roorkee, Haridwar</td>
        <td>₹ 2.45 LAC</td>
        <td>₹ 11.00 LAC</td>
        <td>₹ 15.75 LAC</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Haridwar</td>
        <td>Haridwar Ayurvedic Medical College and Hospital, mushtafabad, laksar road, Haridwar.</td>
        <td>₹ 2.45 LAC</td>
        <td>₹ 11.00 LAC</td>
        <td>₹ 14.65 LAC</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Dehradun</td>
        <td>Beehive Ayurved Medical College and Hospital, Central Hopetown, Selaquie, Dehradun</td>
        <td>₹ 3.24 LAC</td>
        <td>₹ 10.97 LAC</td>
        <td>₹ 15.57 LAC</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Haridwar</td>
        <td>Bishamber Sahai Ayurved Medical College and Research Centre, Roorkee.</td>
        <td>₹ 2.50 LAC</td>
        <td>₹ 11.00 LAC</td>
        <td>₹ 14.60 LAC</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Uttarkashi</td>
        <td>Smt. Manjera Devi Ayurved Medical and Hospital, Hitanu, Dhanari, Uttarkashi.</td>
        <td>₹ 2.50 LAC</td>
        <td>₹ 11.25 LAC</td>
        <td>₹ 14.85 LAC</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Dehradun</td>
        <td>Beehive Ayurved Medical College and Hospital, Central Hopetown, Selaquie, Dehradun.</td>
        <td>₹ 2.50 LAC</td>
        <td>₹ 10.20 LAC</td>
        <td>₹ 13.80 LAC</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Haridwar</td>
        <td>Coer Medical College of Ayurved and Hospital, Roorkee, Haridwar</td>
        <td>₹ 2.50 LAC</td>
        <td>₹ 11.25 LAC</td>
        <td>₹ 14.85 LAC</td>
    </tr>
</table>

</tbody>
			</table>

		</div>
	</div>
</div>';



        return $stateFee;
    }




    /* public function FeeStructureMDMS_UP($class)
    {


$feestructure=DB::table("mdms_colleges")->orderBy('college_name')->get()->sortBy('college_name');



$stateFee='<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bums" aria-expanded="false" aria-controls="course_bums">
			Fee Structure Of Medical Colleges In UTTARPRADESH for MDMS
		</button>
	</h5>';


//district	development_fee	total_fee

	$stateFee.='<div id="course_bums" class="accordion-collapse collapse'.$class.'" aria-labelledby="course_bums"
		data-bs-parent="#accordionExample">
		
		
		<div class="accordion-body">
		
	
    <h5>UTTARPRADESH PG PRIVATE MEDICAL COLLEGE AND FEE STRUCTURE</h5>
     <table id="table_mdms_up" width="100%">
       
            <thead><tr>
            
                <th>Name of the College/Institute</th>
                <th>FEES</th>
            </tr>
        </thead>
          <tbody>';
          
          
				foreach($feestructure as $fee)
					{
					$stateFee.="<tr>
						<td>".$fee->college_name."</td>
						
						<td>".$fee->tution_fee."</td>
						
						
					</tr>";
					}


        
          
           	$stateFee.='<tr>
               
                <td>Uttaranchal Unani Medical College & Hospital Mustafabad (Padartha) Haridwar
</td>
                <td>2,15,000</td>
            </tr>
        </tbody>
    </table>


		</div>
	</div>
</div>';

return $stateFee;
}*/
    public function FeeSructureBUMS($class)
    {




        $feestructure = DB::table("course_bums")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bums" aria-expanded="false" aria-controls="course_bums">
			Fee Structure Of Medical Colleges In Karnataka for BUMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bums" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bums"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_course_bums" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
						<th>Govt. Fee</th>
						<th>Private Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee_govt . "</td>
						<td>" . $fee->tution_fee_private . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";


















        $feestructure = DB::table("course_bums_unani_up")->where('type', 'unani')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums_unani_up">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bums_unani_up" aria-expanded="false" aria-controls="course_bums_unani_up">
			Fee Structure Of Medical Colleges In Uttarpradesh for BUMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bums_unani_up" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bums_unani_up"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<h5>
यूनानी महाविद्यालयों की सूची				</h5>';


        //district	development_fee	total_fee

        $stateFee .= '
			<table id="table_course_bums_unani_up" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>महाविद्यालय
</th>
					
						<th>सीट 
</th>
						<th>N.C.I.S.M से मान्यता प्राप्त होने की तिथि
</th>
							<th>निर्धारित शुल्क

</th>
				
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->seat . "</td>
						<td>" . $fee->registration_date . "</td>
							<td>" . $fee->tution_fee . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
		

		</div>
	</div>
</div>";




        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="heading_bums_rajasthan">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#bums_rajasthan" aria-expanded="false" aria-controls="_bums_rajasthan">
			Fee Structure Of Medical Colleges In Rajasthan for BAMS
		</button>
	</h5>';



        $stateFee .= '<div id="bums_rajasthan" class="accordion-collapse collapse' . $class . '" aria-labelledby="bums_rajasthan"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
		
		<h5>RAJASTHAN UNANI PRIVATE COLLEGE</h5>

			<table id="table_bums_rajasthan" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name
</th>
					
					
							<th>Fee

</th>
				
					</tr>
				</thead>
				<tbody>

				<tr><td>Rajshthan Unani Medical College , Jaipur</td><td> 	1,30,000/-</td></tr>
<tr><td>Rajputana Medical College , Jaipur</td><td> 	1,30,000/-</td>
</tr>
					
				</tbody>
			</table>
			
				
		<h5>RAJASTHAN UNANI CONSTITUE COLLEGE OF UNIVERSITY </h5>

			<table id="table_bums_rajasthan" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name
</th>
					
					
							<th>Fee

</th>
				
					</tr>
				</thead>
				<tbody>

				<tr><td>University College of Unani ( DSRRAU ) , Tonk 
</td><td> 90,000/- Per Year 
</td></tr>

					
				</tbody>
			</table>
			
			
			</div>
			</div>
			</div>';



        $feestructure = DB::table("ug_mp_colleges")->where('type', 'unani')->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee .= '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#ug_mp_colleges" aria-expanded="false" aria-controls="ug_mp_colleges">
			Fee Structure Of Medical Colleges In MP for BUMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="ug_mp_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="ug_mp_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_ug_mp_colleges" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
						<th> Fee</th>
						
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee . "</td>
						
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }
    public function FeeStructureBUMS_UTTARAKHAND($class)
    {



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bums">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bums" aria-expanded="false" aria-controls="course_bums">
			Fee Structure Of Medical Colleges In UTTARAKHAND for BUMS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bums" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bums"
		data-bs-parent="#accordionExample">
		
		
		<div class="accordion-body">
		
	
    <h5>UNANI COLLEGES</h5>
     <table>
        <tbody>
            <thead><tr>
            
                <th>Name of the College/Institute</th>
                <th>FEES</th>
            </tr>
        </thead>
          <tbody>

        
          
            <tr>
               
                <td>Uttaranchal Unani Medical College & Hospital Mustafabad (Padartha) Haridwar
</td>
                <td>2,15,000</td>
            </tr>
        </tbody>
    </table>


		</div>
	</div>
</div>';

        return $stateFee;
    }





    public function FeeSructureBDS($class)
    {

        $feestructure = DB::table("course_bds")->orderBy('college_name')->get()->sortBy('college_name');

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingcourse_bds">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#course_bds" aria-expanded="false" aria-controls="course_bds">
			Fee Structure Of Medical Colleges In Karnataka for BDS
		</button>
	</h5>';


        //district	development_fee	total_fee

        $stateFee .= '<div id="course_bds" class="accordion-collapse collapse' . $class . '" aria-labelledby="course_bds"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_course_bds" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
					
						<th>Govt. Fee</th>
						<th>Private Fee</th>
						<th>NRI Fee</th>
						<th>Other Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						
						<td>" . $fee->tution_fee_govt . "</td>
						<td>" . $fee->tution_fee_private . "</td>
						
						<td>" . $fee->tution_fee_nri . "</td>
						<td>" . $fee->tution_fee_other . "</td>
						
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructureJharkhand($class)
    {

        $feestructure = DB::table("state_jharkhand")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_jharkhand">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_jharkhand" aria-expanded="false" aria-controls="state_jharkhand">
			Fee Structure Of Medical Colleges In Jharkhand
		</button>
	</h5>';



        $stateFee .= '<div id="state_jharkhand" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_jharkhand"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_jharkhand" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>University</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->university . "</td>
						<td>" . $fee->tution_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }
    public function FeeStructureWB($class)
    {

        $feestructure = DB::table("state_westbengol")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_westbengol">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_westbengol" aria-expanded="false" aria-controls="state_westbengol">
			Fee Structure Of Medical Colleges In West Bengal
		</button>
	</h5>';



        $stateFee .= '<div id="state_westbengol" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_westbengol"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_westbengol" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Fee(Govt Quota)</th>
						<th>Fee(Mamt Quota)</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->tution_fee_govt . "</td>
						<td>" . $fee->tution_fee_mngm . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructureManipur($class)
    {

        $feestructure = DB::table("state_manipur")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_manipur">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_manipur" aria-expanded="false" aria-controls="state_manipur">
			Fee Structure Of Medical Colleges In Manipur
		</button>
	</h5>';



        $stateFee .= '<div id="state_manipur" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_manipur"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_manipur" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->tution_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }
    public function FeeSructureMaharashtra($class)
    {

        $feestructure = DB::table("state_maharashtra")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_maharashtra">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_maharashtra" aria-expanded="false" aria-controls="state_maharashtra">
			Fee Structure Of Medical Colleges In Maharashtra
		</button>
	</h5>';



        $stateFee .= '<div id="state_maharashtra" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_maharashtra"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_maharashtra" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }


    public function FeeSructureRajasthan($class)
    {


        $feestructure = DB::table("state_rajasthan")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_rajasthan">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_rajasthan" aria-expanded="false" aria-controls="state_rajasthan">
			Fee Structure Of Medical Colleges In Rajasthan
		</button>
	</h5>';



        $stateFee .= '<div id="state_rajasthan" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_rajasthan"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_rajasthan" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>College Type</th>
						<th>State Quota</th>
						<th>Management Quota</th>
						<th>NRI Fee</th>
					</tr>
				</thead>
				<tbody>';



        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->college_type . "</td>
						<td>" . $fee->state_quota . "</td>
						<td>" . $fee->management_quota . "</td>
						<td>" . $fee->nri_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";


        return $stateFee;
    }

    public function FeeSructureKarnataka($class)
    {

        $feestructure = DB::table("state_karnataka")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_karnataka">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_karnataka" aria-expanded="false" aria-controls="state_karnataka">
			Fee Structure Of Medical Colleges In Karnataka
		</button>
	</h5>';




        $stateFee .= '<div id="state_karnataka" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_karnataka"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">

			<table id="table_state_karnataka" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>


						<th>Govt Fee</th>
						<th>Private Fee</th>
							<th>NRI Fee</th>
						<th>Other Fee</th>



					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>


						<td>" . $fee->fee_govt . "</td>
						<td>" . $fee->fee_private . "</td>
							<td>" . $fee->fee_nri . "</td>
						<td>" . $fee->fee_other . "</td>

					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }








    public function FeeStructureBihar($class)
    {


        $Mpfeestructure = DB::table("state_bihar")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_bihar">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#state_bihar"
			aria-expanded="false" aria-controls="state_bihar">
			Fee Structure Of Medical Colleges In Bihar
		</button>
	</h5>';


        $stateFee .= '<div id="state_bihar" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingstate_bihar"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_bihar" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';

        //stateFee.="";


        foreach ($Mpfeestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructureMP($class)
    {




        $Mpfeestructure = DB::table("state_madhyapradesh")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_madhyapradesh">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_madhyapradesh" aria-expanded="false" aria-controls="state_madhyapradesh">
			Fee Structure Of Medical Colleges In Madhya Pradesh
		</button>
	</h5>';





        $stateFee .= '<div id="state_madhyapradesh" class="accordion-collapse ' . $class . '" aria-labelledby="headingstate_madhyapradesh"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_madhyapradesh" width="100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>City</th>
						<th>Regular Fee</th>
						<th>NRI Fee</th>
					</tr>
				</thead>
				<tbody>';


        foreach ($Mpfeestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->city . "</td>
						<td>" . $fee->regular_fee . "</td>
						<td>" . $fee->nri_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";


        return $stateFee;
    }

    public function FeeStructureCG($class)
    {


        $Mpfeestructure = DB::table("state_chattisgarh")->get();

        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_chattisgarh">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_chattisgarh" aria-expanded="false" aria-controls="state_chattisgarh">
			Fee Structure Of Medical Colleges In Chhattisgarh
		</button>
	</h5>';


        $stateFee .= '<div id="state_chattisgarh" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_chattisgarh"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_chattisgarh" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>College Management Type</th>
						<th>Annual Tution Fee</th>
					</tr>
				</thead>
				<tbody>';

        //stateFee.="";


        foreach ($Mpfeestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->college_namagement_type . "</td>
						<td>" . $fee->annual_tution_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }


    public function FeeStructureMaharashtra($class)
    {



        $feestructure = DB::table("state_maharashtra")->get();


        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_maharashtra">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_maharashtra" aria-expanded="false" aria-controls="state_maharashtra">
			Fee Structure Of Medical Colleges In Maharashtra
		</button>
	</h5>';



        $stateFee .= '<div id="state_maharashtra" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_maharashtra"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_maharashtra" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Fee</th>
					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }






    public function FeeStructureUP($class)

    {

        $feestructure = DB::table("state_up")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_up">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#state_up"
			aria-expanded="false" aria-controls="state_up">
			Fee Structure Of Medical Colleges In Uttarpradesh
		</button>
	</h5>';




        $stateFee .= '<div id="state_up" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_up"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_up" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Annual Fee</th>
						<th>Hostel Fee for None AC</th>
						<th>Hostel Fee for AC</th>
						<th>Security Deposite</th>
						<th>MISC Fee</th>
					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->annual_fee . "</td>
						<td>" . $fee->hostel_fee_none_ac . "</td>
						<td>" . $fee->hostel_fee_ac . "</td>
						<td>" . $fee->security_deposit . "</td>
						<td>" . $fee->misc_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructurePunjab($class)

    {


        $feestructure = DB::table("state_punjab")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_punjab">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_punjab" aria-expanded="false" aria-controls="state_punjab">
			Fee Structure Of Medical Colleges In Punjab
		</button>
	</h5>';




        $stateFee .= '<div id="state_punjab" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_punjab"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_punjab" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Estb Year</th>
						<th>Seat</th>
						<th>Tution Fee</th>
						<th>NRI Fee(USD)</th>
						<th>Total Fee</th>
					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->estb_year . "</td>
						<td>" . $fee->seat . "</td>
						<td>" . $fee->tution_fee . "</td>
						<td>" . $fee->nri_fee . "</td>
						<td>" . $fee->total_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructureHaryana($class)
    {


        $feestructure = DB::table("state_haryana")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_haryana">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_haryana" aria-expanded="false" aria-controls="state_haryana">
			Fee Structure Of Medical Colleges In Haryana
		</button>
	</h5>';




        $stateFee .= '<div id="state_haryana" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_haryana"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_haryana" style="width:100%;">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Estb Year</th>

						<th>Tution Fee</th>
						<th>NRI Fee(USD)</th>
						<th>Total Tution Fee</th>
						<th>Marks Range</th>
						<th>Hostel Fee</th>
						<th>Complete Fee</th>
					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>
						<td>" . $fee->estb_year . "</td>
						<td>" . $fee->tution_fee . "</td>
						<td>" . $fee->nri_fee . "</td>
						<td>" . $fee->total_tution_fee . "</td>
						<td>" . $fee->marks_range . "</td>
						<td>" . $fee->hoste_fee . "</td>
						<td>" . $fee->complete_fee . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";
        return $stateFee;
    }

    public function FeeStructureTamilnadu($class)

    {

        $feestructure = DB::table("state_tamilnadu")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_tamilnadu">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_tamilnadu" aria-expanded="false" aria-controls="state_tamilnadu">
			Fee Structure Of Medical Colleges In Tamilnadu
		</button>
	</h5>';




        $stateFee .= '<div id="state_tamilnadu" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_tamilnadu"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_tamilnadu" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>
						<th>Location</th>

						<th>Tution Fee(INR)</th>

						<th>Per Year</th>

					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>

						<td>" . $fee->location . "</td>
						<td>" . $fee->tution_fee . "</td>
						<td>" . $fee->per_year . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }

    public function FeeStructureOddisa($class)
    {


        $feestructure = DB::table("state_oddisa")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_oddisa">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_oddisa" aria-expanded="false" aria-controls="state_oddisa">
			Fee Structure Of Medical Colleges In Oddisa
		</button>
	</h5>';




        $stateFee .= '<div id="state_oddisa" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_oddisa"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_oddisa" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>


						<th>Tution Fee</th>



					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>


						<td>" . $fee->tution_fee . "</td>

					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;
    }



    public function FeeStructureKerala($class)
    {

        $feestructure = DB::table("state_kerala")->get();



        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingstate_kerala">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#state_kerala" aria-expanded="false" aria-controls="state_kerala">
			Fee Structure Of Medical Colleges In Kerala
		</button>
	</h5>';




        $stateFee .= '<div id="state_kerala" class="accordion-collapse collapse ' . $class . '" aria-labelledby="headingstate_kerala"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_state_kerala" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>


						<th>Tution Fee</th>



					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>


						<td>" . $fee->tution_fee . "</td>


					</tr>";
        }

        $stateFee .= "</tbody>
			</table>";



        $feestructure = DB::table("state_kerala_fee")->get();



        $stateFee .= '		<table id="table_state_kerala_fee" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College Name</th>


						<th>Tution Fee</th>
						<th>NRI Fee</th>
						<th>College Type</th>



					</tr>
				</thead>
				<tbody>';


        //stateFee.="";

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_name . "</td>


						<td>" . $fee->tution_fee . "</td>
							<td>" . $fee->nri_fee . "</td>
							<td>" . $fee->type . "</td>


					</tr>";
        }

        $stateFee .= "</tbody>
			</table>
		</div>
	</div>
</div>";



        return $stateFee;
    }




    public function SingleCollege($slug)
    {
        $college = College::where('slug', $slug)->first();

        if (!$college) {
            abort(404);
        }

        $otherCollege = College::where('state', $college->state)->where('id', '!=', $college->id)->get();

        return view(
            'frontend.singlecollege',
            [
                'menu' => $this->NvabarMenu(),
                'pageLinks' => $this->PageLinks(),
                'college' => $college,
                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => College::select('seo_meta_title')->where('slug', $slug)->first(),
                'seo_meta_keywords' => College::select('seo_meta_keywords')->where('slug', $slug)->first(),
                'seo_meta_description' => College::select('seo_meta_description')->where('slug', $slug)->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                'script' => $this->faqScript($college->id, 'college'),
                'faqLayOut' => $this->faqLayOut($college->id, 'college'),
                'otherColleges'=>$otherCollege

            ]
        );
    }
    public function SingleCourse($slug)
    {
        $course = Widget::where('slug', $slug)->first();

        if (!$course) {
            abort(404);
        }

        return view(
            'frontend.singlecourse',
            [
                'menu' => $this->NvabarMenu(),
                'page' => $course,
                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Widget::select('seo_meta_title')->where('slug', $slug)->first(),
                'seo_meta_keywords' => Widget::select('seo_meta_keywords')->where('slug', $slug)->first(),
                'seo_meta_description' => Widget::select('seo_meta_description')->where('slug', $slug)->first(),
                'canonical_link' => Widget::select('canonical_link')->where('slug', $slug)->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),

                'pageLinks' => $this->PageLinks(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                'script' => ""

            ]
        );
    }



    public function GetAyurvedaColleges($class)
    {
        $feestructure = DB::table('ayurveda_colleges')->orderBy('college_state')->get()->sortBy('college_state');




        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingayurveda_colleges">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#ayurveda_colleges" aria-expanded="false" aria-controls="ayurveda_colleges">
		List Of Ayurvada Colleges
		</button>
	</h5>';



        $stateFee .= '<div id="ayurveda_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingayurveda_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_ayurveda_colleges" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College State</th>
						<th>College Name</th>
						<th>Year of Establishment</th>
						<th>Govt Aided Private Deemed</th>
						<th>Name Of Affiliating Body</th>
						<th>UG Seats</th>
						<th>PG Seats</th>
						<th>Total Seats</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_state . "</td>
						<td>" . $fee->name_of_the_college . "</td>
						<td>" . $fee->year_of_establishment . "</td>
						<td>" . $fee->govt_aided_private_deemed . "</td>
						<td>" . $fee->name_of_affiliating_body . "</td>
						<td>" . $fee->ug_seats . "</td>
						<td>" . $fee->pg_seats . "</td>
						<td>" . $fee->total_seats . "</td>
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;


        return $record;
    }

    public function GetUnaniColleges($class)
    {
        $feestructure = DB::table('unani_colleges')->orderBy('college_state')->get()->sortBy('college_state');




        $stateFee = '<div class="accordion-item">
	<h5 class="accordion-header" id="headingunani_colleges">
		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
			data-bs-target="#unani_colleges" aria-expanded="false" aria-controls="unani_colleges">
		List Of Unani Colleges
		</button>
	</h5>';



        $stateFee .= '<div id="unani_colleges" class="accordion-collapse collapse' . $class . '" aria-labelledby="headingunani_colleges"
		data-bs-parent="#accordionExample">
		<div class="accordion-body">
			<table id="table_unani_colleges" style="width:100%">
				<thead style="width:100%">
				<tr style="width:100%">
						<th>College State</th>
						<th>College Name</th>
						<th>Year of Establishment</th>
						<th>Govt Aided Private Deemed</th>
					</tr>
				</thead>
				<tbody>';

        foreach ($feestructure as $fee) {
            $stateFee .= "<tr>
						<td>" . $fee->college_state . "</td>
						<td>" . $fee->name_of_the_college . "</td>
						<td>" . $fee->year_of_establishment    . "</td>
						<td>" . $fee->college_type . "</td>
					
					</tr>";
        }

        $stateFee .= "</tbody>
			</table>

		</div>
	</div>
</div>";

        return $stateFee;


        return $record;
    }



    public function ListColleges()
    {

        return view(
            'frontend.allcollege',
            [
                'menu' => $this->NvabarMenu(),
                'colleges' => College::orderBy('state')->get(),
                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('id', 99)->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('id', 99)->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('id', 99)->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                'pageLinks' => $this->pageLinks(),
                'script' => ""

            ]
        );
    }


    public function SingleBlog($slug)
    {
        $post = Blog::where('slug', $slug)->first();

        if (!$post) {
            abort(404);
        }

        return view(
            'frontend.singleblog',
            [
                'menu' => $this->NvabarMenu(),
                'pageLinks' => $this->pageLinks(),
                'footermenu' => $this->NavbarFooter(),
                'blog' => $post,
                'seo_meta_title' => Blog::select('seo_meta_title')->where('slug', $slug)->first(),
                'seo_meta_keywords' => Blog::select('seo_meta_keywords')->where('slug', $slug)->first(),
                'seo_meta_description' => Blog::select('seo_meta_description')->where('slug', $slug)->first(),
                'canonical_link' => Blog::select('canonical_link')->where('slug', $slug)->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),
                'script' => $this->faqScript($post->id, 'blog'),
                'faqLayOut' => $this->faqLayOut($post->id, 'page')
            ]
        );
    }

    public function ListBlogPost()
    {
        return view(
            'frontend.allblog',
            [
                'menu' => $this->NvabarMenu(),

                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('slug', 'our-blog')->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', 'our-blog')->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('slug', 'our-blog')->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'all_news' => Notification::latest()->get(),
                'blogs' => Blog::latest()->get(),
                'script' => ""

            ]
        );
    }




    public function     CareerPage(Request $request)
    {

        if ($request->isMethod('post')) {




            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'graduation' => $request->graduation,
                'work_experience' => $request->work_experience,
                'job_profile' => $request->job_profile,
            ];

            DB::table('career')->insert($data);

            session()->flash('success', '<p> Your Application has been sent successfully. We will response you soon!</p>');
            return back();
        }
        return view(
            'frontend.career',
            [
                'menu' => $this->NvabarMenu(),

                'footermenu' => $this->NavbarFooter(),
                'seo_meta_title' => Page::select('seo_meta_title')->where('slug', 'career')->first(),
                'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', 'career')->first(),
                'seo_meta_description' => Page::select('seo_meta_description')->where('slug', 'career')->first(),
                'category' => $this->Category(),
                'collegeList' => $this->ListofColleges(),
                'all_news' => Notification::latest()->get(),
                'blogs' => $this->BlogPost(),

                'script' => ""

            ]
        );
    }

    public function services()
    {
        $services = WebsiteMenuDropdown::select('website_menu_dropdowns.*', 'pages.slug')
            ->join('pages', 'website_menu_dropdowns.page_id', '=', 'pages.id')
            ->where('website_menu_dropdowns.menu_id', 3)->get();
        return $services;
    }

    public function admissions()
    {
        $services = WebsiteMenuDropdown::where('menu_id', 9)->get();
        return $services;
    }


    public function GetReview()
    {
        return DB::table('review')->get();
    }


    public function newsShow($slug)
    {

        $news = Notification::where('slug', $slug)->first();

        if (!empty($news)) {
            return view(
                'frontend.single-news',
                [
                    'menu' => $this->NvabarMenu(),
                    'news' => $news,
                    'footermenu' => $this->NavbarFooter(),
                    'seo_meta_title' => Notification::select('seo_meta_title')->where('slug', $slug)->first(),
                    'seo_meta_keywords' => Notification::select('seo_meta_keywords')->where('slug', $slug)->first(),
                    'seo_meta_description' => Notification::select('seo_meta_description')->where('slug', $slug)->first(),
                    'canonical_link' => Notification::select('canonical_link')->where('slug', $slug)->first(),
                    'category' => $this->Category(),
                    'collegeList' => $this->ListofColleges(),
                    'all_news' => Notification::latest()->get(),
                    'blogs' => $this->BlogPost(),
                    'pageLinks' => $this->pageLinks(),
                    'script' => $this->faqScript($news->id, 'news'),
                    'faqLayOut' => $this->faqLayOut($news->id, 'news')

                ]
            );
        } else {
            abort(404);
        }
    }



    public function AllNews()
    {
        $news = Notification::latest()->get();

        if (!empty($news)) {

            return view(
                'frontend.allnotification',
                [
                    'menu' => $this->NvabarMenu(),
                    'news' => $news,
                    'footermenu' => $this->NavbarFooter(),
                    'seo_meta_title' => Page::select('seo_meta_title')->where('slug', 'news-and-alerts')->first(),
                    'seo_meta_keywords' => Page::select('seo_meta_keywords')->where('slug', 'news-and-alerts')->first(),
                    'seo_meta_description' => Page::select('seo_meta_description')->where('slug', 'news-and-alerts')->first(),
                    'category' => $this->Category(),
                    'collegeList' => $this->ListofColleges(),
                    'all_news' => Notification::latest()->get(),
                    'blogs' => $this->BlogPost(),
                    'script' => ""
                ]
            );
        } else {
            return redirect()->route('error');
        }
    }
    public function ListofColleges()
    {
        return College::get();
    }

    public function storeContact(Request $request)
    {



        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            //"neet_score"=>0,
            "course" => $request->course
        ];

        DB::table('enquiery')->insert($data);

        //UserData::create($request->all());
        return json_encode(array(
            "statusCode" => 200
        ));
    }


    public function PageLinks()
    {
        $menu = WebsiteMenu::whereIn('id', array(4, 5, 3))->get();
$WebpageMenu = '';

foreach ($menu as $item) {

    if ($item->category == 0) {
        $page = Page::where('id', $item->page_id)->first();
        $url = !empty($page->slug) ? url($page->slug) : "javascript:void(0)";

        $WebpageMenu .= '<a class="quick-link-btn" href="' . $url . '"><span>' . $item->title . '</span></a>';
    }

    if ($item->category == 1) {
        $dropdowns = WebsiteMenuDropdown::where('menu_id', $item->id)->get();

        foreach ($dropdowns as $submenu) {
            $page = Page::where('id', $submenu->page_id)->first();
            $url = !empty($page->slug) ? url($page->slug) : "javascript:void(0)";

            $WebpageMenu .= '<a class="quick-link-btn" href="' . $url . '"><span>' . $submenu->title . '</span></a>';
        }
    }

    if ($item->category == 2) {
        $dropdowns = MegaMenuDropdown::where('menu_id', $item->id)
            ->where('category_id', 0)
            ->get();

        foreach ($dropdowns as $megamenu) {
            $submenuitems = MegaMenuDropdown::where('category_id', $megamenu->id)->get();

            foreach ($submenuitems as $submenu_item) {
                $page = Page::where('id', $submenu_item->page_id)->first();
                $url = !empty($page->slug) ? url($page->slug) : "javascript:void(0)";

                $WebpageMenu .= '<a class="quick-link-btn" href="' . $url . '"><span>' . $submenu_item->title . '</span></a>';
            }
        }
    }
}

return $WebpageMenu;

    }




    public function faqScript($page_id, $post_type)
    {
        $faqs = DB::table('post_faq')->select("post_faq.*")->where('page_id', $page_id)->where('post_type', $post_type)->get();

        $script = "";

        if (!empty($faqs) && count($faqs) > 0) {
            $script = '<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [';
            $i = 0;
            $count = count($faqs);
            foreach ($faqs as $faq) {
                $i++;
                if ($i < $count) {
                    $script .= '{
        "@type": "Question",
        "name": "' . $faq->question . '",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "' . $faq->answer . '"
        }
      },
        ';
                } else {
                    $script .= '{
        "@type": "Question",
        "name": "' . $faq->question . '",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "' . $faq->answer . '"
        }
      }
        ';
                }
            }

            $script .= ']
    }
    
    </script>';
        }


        return $script;
    }




    public function faqLayout($page_id, $post_type)
    {
        $faqs = DB::table('post_faq')->select("post_faq.*")->where('page_id', $page_id)->where('post_type', $post_type)->get();

        return $faqs;
    }



    public function CollegeSearch(Request $request)
    {

        $searchQeury = '%' . $request->search . '%';
        $result = College::where('name', 'LIKE',  $searchQeury)
            ->orWhere('state', 'LIKE',  $searchQeury)
            ->orWhere('country', 'LIKE',  $searchQeury)
            ->orWhere('seo_meta_keywords', 'LIKE',  $searchQeury)
            ->get();

        $output = "";

        if (!empty($result)) {

            foreach ($result as $post) {
                $output .= '             
                <div class="col-lg-4 col-md-6 col-sm-12">
                     <a href="' . url('college/' . $post->slug) . '" alt="' . $post->name . '">
                    <div class="card mt-2 p-1">
                        <div class="image-box ">
                            <img src="' . asset('college/' . $post->card_image) . '" alt="' . $post->name . '" class="img-fluid rounded" >
                    </div>   
                    <div class="college-content-box pt-2">
                        <h4 class="title news-title-custom">' . $post->name . '</h4>
                        <p>' . $post->address . '</p>
                     </div>
                   
                </div>
                </a>
                    </div>';
            }
            return response($output);
        } else {
            return response($output);
        }
    }

    
    // public function view_cutoff(Request $request)
    // {
    //     $sid = getenv("TWILIO_SID");
    //     $twitoken = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio = new Client($sid, $twitoken);

    //     $mobileno = $request->mobile;

    //     $otp = rand(100000, 999999);

    //     $message = $twilio->messages
    //         ->create('+91'.$mobileno, // to
    //         [
    //             "body" => 'OTP for Bano Doctor - '.$otp.' Note: Do not share with anyone',
    //             "from" => getenv("TWILIO_FROM")
    //         ]
    //     );

    //     if($otp == $request->otp)
    //     {
    //         $request->validate([
    //             'mobile' => 'required|digits:10',
    //             'fullName' => 'required',
    //             'neetScore' => 'required'
    //         ]);

    //         $data = [
    //             $request->mobile,
    //             $request->fullName,
    //             $request->neetScore
    //         ];

    //         CutOffEnquiryModel::create($data);
    //     }
    //     else{
    //         return redirect()->back()->with('alert', 'Wrong OTP.');
    //     }
    // }

    public function send_otp(Request $request)
    {
        $sid = getenv("TWILIO_SID");
        $twitoken = getenv("TWILIO_AUTH_TOKEN");
        $twilio = new Client($sid, $twitoken);

        $mobileno = $request->mobile;
        $otp = rand(100000, 999999);

        $message = $twilio->messages->create('+91' . $mobileno, [
            "body" => 'OTP for Bano Doctor - ' . $otp . '. Note: Do not share with anyone',
            "from" => getenv("TWILIO_FROM")
        ]);

        session(['otp' => $otp]);

        return response()->json(['success' => true]);
    }

    public function verify_otp(Request $request)
    {
        $inputOtp = $request->otp;
        $sessionOtp = session('otp');

        if ($inputOtp == $sessionOtp) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function view_cutoff(Request $request)
    {
        $request->validate([
            'mobile' => 'required|digits:10',
            'fullName' => 'required',
            'neetScore' => 'required'
        ]);

        $data = [
            'mobile' => $request->mobile,
            'fullName' => $request->fullName,
            'neetScore' => $request->neetScore
        ];

        CutOffEnquiryModel::create($data);

        return response()->json(['success' => true]);
    }
}