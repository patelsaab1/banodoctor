<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MegaMenuDropdownController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\MenuDropdownController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\WidgetController;
use App\Http\Controllers\Backend\CollegeController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\NotificationController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\Backend\CountryStateController;

use App\Http\Controllers\Backend\FeeStructureController;
use App\Http\Controllers\FileUploadController;



Route::prefix('admin')->middleware('auth')->group(function () {
    
    
  
    
Route::get('/download-file/{id}', [FileUploadController::class, 'download'])->name('upload.download');

Route::get('/upload-files', [FileUploadController::class, 'index'])->name('upload.index');
Route::post('/upload-files', [FileUploadController::class, 'store'])->name('upload.store');

    
    
      
Route::match(['get','post'],'/faq-create/{page_id}',[PageController::class,'faq'])->name('faq-create');


Route::match(['get','post'],'/faq-create-college/{page_id}',[CollegeController::class,'faq'])->name('college-faq-create');



    
Route::match(['get'],'/faq',[PageController::class,'faqView'])->name('faq-view');



Route::match(['get','post'],'/faq-post-update/{id}',[PageController::class,'faqUpdate'])->name('faq.post.update');

Route::match(['get','post'],'/faq-post-delete/{id}',[PageController::class,'faqDelete'])->name('faq.post.delete');


     
Route::post('/embed-video/{pageid}',[PageController::class,'embedVideo'])->name('page.embed.video');
    
    

    Route::match(['get', 'post'], '/menu', [MenuController::class, 'create'])->name('menu');
    Route::match(['get', 'post'], '/menu-dropdown', [MenuDropdownController::class, 'create'])->name('menu-dropdown');
    
    Route::match(['get','post'],'/menu-dropdown/{id}',[MenuDropdownController::class,'submenuItemsUpdate'])->name('menu-dropdown-edit');
    
    Route::match(['get', 'post'], '/mega-menu-dropdown', [MegaMenuDropdownController::class, 'create'])->name('mega-menu-dropdown');
    Route::post('/mega-submenu-dropdown', [MegaMenuDropdownController::class, 'createSubmenu'])->name('mega-submenu-dropdown');
    
    Route::match(['get', 'post'], '/widget', [WidgetController::class, 'create'])->name('widget');
     Route::match(['get', 'post'], '/widget-edit-seo/{widgetid}', [WidgetController::class, 'seo_meta_information'])->name('widget-edit-seo');
     
      Route::match(['get', 'post'], '/widget-edit/{widgetID}', [WidgetController::class, 'update'])->name('widget.edit');
   
    
    Route::match(['get', 'post'], '/category', [CategoryController::class, 'create'])->name('category');
    Route::match(['get', 'post'], '/subcategory', [SubCategoryController::class, 'create'])->name('subcategory');
     Route::match(['get', 'post'], '/subcat--edit-seo-info/{subcatid}', [SubCategoryController::class, 'seo_meta_information'])->name('subcategory-edit-seo');
     
     Route::match(['get','post'],'/subcategory-update/{id}',[SubCategoryController::class,'update'])->name('update.subcategory.image');
     
    
    
    Route::match(['get', 'post'], '/page', [PageController::class, 'create'])->name('page');
    Route::get('/pages', [PageController::class, 'view'])->name('page-view');
    Route::match(['get','post'],'/page-update/{pageid}', [PageController::class, 'edit'])->name('page-edit');
    Route::match(['get','post'],'/page-update/{pageid}', [PageController::class, 'edit'])->name('page-edit');
    Route::match(['get','post'],'/page-edit-seo-info/{pageid}', [PageController::class, 'seo_meta_information'])->name('page-edit-seo');
    
    Route::match(['get', 'post'], '/college', [CollegeController::class, 'create'])->name('college');
    Route::match(['get','post'],'/colleges', [CollegeController::class, 'view'])->name('college-view');
    
    
    Route::get('college-edit/{collegeid}', [CollegeController::class, 'edit'])->name('college-edit');
    
     Route::post('update-college-edit/{collegeid}', [CollegeController::class, 'edit'])->name('college-edit-update');
    
    
    
    Route::match(['get','post'],'/college-edit-seo-info/{collegeid}', [CollegeController::class, 'seo_meta_information'])->name('college-edit-seo');
    
    
       Route::match(['get', 'post'], '/review', [ReviewController::class, 'create'])->name('review');
       Route::get('/reviews', [ReviewController::class, 'view'])->name('review-view');
       
       
        Route::match(['get', 'post'], '/notification/create', [NotificationController::class, 'create'])->name('notice');
        Route::match(['get', 'post'], '/notification/update/{newsid}', [NotificationController::class, 'edit'])->name('notice-edit');
        Route::get('/notifications', [NotificationController::class, 'view'])->name('notice-view');
           
    Route::match(['get','post'],'/news-edit-seo-info/{newsid}', [NotificationController::class, 'seo_meta_information'])->name('news-edit-seo');
    
   
         Route::match(['get','post'],'/news-faq/{page_id}', [NotificationController::class, 'faq'])->name('news-add-faq');
    
    
    
     
    /* Blog page Controller */
    Route::match(['get', 'post'], '/blog', [BlogController::class, 'create'])->name('blog');
    Route::get('/blogs', [BlogController::class, 'view'])->name('blog-view');
    Route::match(['get','post'],'/blog-edit/{blogid}', [BlogController::class, 'edit'])->name('blog-edit');
    
       Route::match(['get','post'],'/blog-faq/{page_id}', [BlogController::class, 'faq'])->name('blog-add-faq');

    
    Route::match(['get','post'],'/blog-edit-seo-info/{blogid}', [BlogController::class, 'seo_meta_information'])->name('blog-edit-seo');
    
   
   
    /*Job Post Controller*/
    Route::match(['get', 'post'], '/job', [JobpostController::class, 'create'])->name('job');
    Route::get('/jobs', [JobpostController::class, 'view'])->name('job-view');
    Route::match(['get','post'],'/job-edit/{jobid}', [JobpostController::class, 'edit'])->name('job-edit');
    Route::match(['get','post'],'/job-edit-seo-info/{jobid}', [JobpostController::class, 'seo_meta_information'])->name('job-edit-seo');

    
    
     /*College Controller */
     
     
    Route::match(['get','post'],'indexing-status-update/{collegeid}',[CollegeController::class, 'indexingUpdate'])->name('indexing-status-update');
   
   
    Route::get('/enquiry', [ContactController::class, 'view'])->name('enquiry');
    
     Route::get('/course/enquiry', [ContactController::class, 'Enquiry'])->name('course-enquiry');
     
     
      Route::match(['get','post'],'/states',  [CollegeController::class, 'StateWiseListCollege'])->name('states-view');
      
       Route::match(['get','post'],'/states/{table}',  [CollegeController::class, 'UpdateCollegeUrl'])->name('states-college-view');
       Route::post('getState', [CollegeController::class, 'fetchState'])->name('get-state-list');
    
    
     Route::match(['get','post'],'/country-setting',[CountryStateController::class,'country'])->name('country-setting');
     
     Route::match(['get','post'],'/state-setting',[CountryStateController::class,'state'])->name('state-setting');
     
     
     
     
     Route::match(['get','post'],'/feestructure/new',[FeeStructureController::class,'create'])->name('create-fee-structure');
     
       Route::match(['get','post'],'/feestructure/update/{feeid}',[FeeStructureController::class,'edit'])->name('edit-fee-structure');
       
      
       
     Route::match(['get','post'],'/feestructure/view',[FeeStructureController::class,'view'])->name('fee-structure-view');
     
     
     Route::get('/feestructure/view/{feeid}',[FeeStructureController::class,'tableView'])->name('table-view-fee-structure');
     
     
     Route::match(['post'],'/update-widget-url/{widgetId}',[WidgetController::class,'updateUrl'])->name('widget.edit.url');
     
      Route::match(['get'],'/work-history',[CollegeController::class,'workHistory'])->name('work.history');
   
});





 
     
