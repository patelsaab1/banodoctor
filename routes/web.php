<?php

use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Widget;

use App\Http\Controllers\StudentEnquiryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\EnquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/check-enquiry-session', [EnquiryController::class, 'checkSession'])->name('check.enquiry.session');
Route::post('/submit-enquiry', [EnquiryController::class, 'submit'])->name('submit.enquiry');

Route::post('/submit-enquiry/feestructure', [EnquiryController::class, 'FeeEnquiryStore'])
    ->name('fee.enquiry.store');
    




Route::match(['get','post'],'/livesearch/colleges',[WebsiteController::class, 'CollegeSearch'])->name('live.search.colleges');


Route::get('/404',function()
{
    
   
        $statusCode = 404;
        
        $data=array();

   
   
   return response()->view('frontend.error', $data,$statusCode);
   
   
    //return view('frontend/error');
    
})->name('error');




    

Route::match(['get','post'],'/contact',[WebsiteController::class, 'LandingPageContactUs'])->name('landingpage.contact');

Route::post('/StoreChatContact',[WebsiteController::class,'storeContact'])->name('store.chat.enquiry');
Route::match(['get','post'],'/career',[WebsiteController::class, 'CareerPage'])->name('career');



Route::match(['get','post'],'/page/study-md-ms-in-india',[WebsiteController::class, 'LandingPageMDMS'])->name('study-mdms');
Route::match(['get','post'],'/page/study-mds-in-india',[WebsiteController::class, 'LandingPageMDS'])->name('study-mds');
Route::match(['get','post'],'/page/study-mbbs-in-india',[WebsiteController::class, 'LandingPageMBBS'])->name('study-mbbs');


Route::get('/', [WebsiteController::class, 'homepage'])->name('web-home');
Route::get('/news/{slug}', [WebsiteController::class, 'newsShow'])->name('single-news');
Route::get('/news-and-alerts', [WebsiteController::class, 'AllNews'])->name('all-news');


Route::get('/about-us', [WebsiteController::class, 'aboutUs'])->name('about-us');

Route::match(['get','post'],'/contact-us', [WebsiteController::class, 'contactUs'])->name('contact-us');

Route::get('/our-blog', [WebsiteController::class, 'ListBlogPost'])->name('blog-list');

Route::get('/college/{slug}', [WebsiteController::class, 'SingleCollege'])->name('single-college');

//Route::get('/colleges/{slug}', [WebsiteController::class, 'ListColleges'])->name('college-list');

Route::get('/course/{slug}', [WebsiteController::class, 'SingleCourse'])->name('single-course');

Route::get('/blog/{slug}', [WebsiteController::class, 'SingleBlog'])->name('single-blog');


Route::get('/colleges/list-of-colleges-for-medical-courses',[WebsiteController::class, 'ListColleges'])->name('college-list');


Route::get('/search',[WebsiteController::class, 'CollegeSearch']);


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::post('view-cutoff', [WebsiteController::class, 'view_cutoff'])->name('view_cutoff');

Route::post('send-otp', [WebsiteController::class, 'send_otp'])->name('send_otp');
Route::post('verify-otp', [WebsiteController::class, 'verify_otp'])->name('verify_otp');
Route::post('view-cutoff', [WebsiteController::class, 'view_cutoff'])->name('view_cutoff');


Route::get('/enquiries/form', [StudentEnquiryController::class, 'create'])->name('enquiries.create');
Route::post('/enquiries/form/submit', [StudentEnquiryController::class, 'store'])->name('enquiries.store');

require __DIR__ . '/auth.php';

require __DIR__ . '/cms.php';

// Catch-all CMS pages must stay last so /search, /register, /college/{slug}, etc. still match.
Route::get('/{slug}', [WebsiteController::class, 'SinglePage'])->name('single-page');
