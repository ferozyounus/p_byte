<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;



Route::get(
  'cache-clear',
  function () {
      \Artisan::call('config:cache');
      \Artisan::call('cache:clear');
      \Artisan::call('config:clear');
      return redirect()->back();
  }
);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();




// PUBLIC ROUTES
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus'])->name('about-us');
Route::get('/assigments', [App\Http\Controllers\HomeController::class, 'assigments'])->name('assigments');
Route::get('/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
Route::get('/blog_and_podcasts', [App\Http\Controllers\HomeController::class, 'blog_and_podcasts'])->name('blog-and-podcasts');
Route::get('/careers', [App\Http\Controllers\HomeController::class, 'careers'])->name('careers');
Route::get('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');





//ADMIN ROUTES
Route::group(['middleware' => ['auth','admin'], 'prefix' => '/admin'] , function() {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/{user}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('profile.update');
    Route::post('/profile/{user}/updatepassword', [App\Http\Controllers\AdminController::class, 'update_password'])->name('profile.updatepassword');


     //Members
     Route::get('/members/listing', [App\Http\Controllers\MemberController::class, 'index'])->name('members.listing');
     Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create');
     Route::post('/members/store', [App\Http\Controllers\MemberController::class, 'store'])->name('members.store');
     Route::get('/members/{member}/edit', [App\Http\Controllers\MemberController::class, 'edit'])->name('members.edit');
     Route::get('/members/{member}/show', [App\Http\Controllers\MemberController::class, 'show'])->name('members.show');
     Route::post('/members/{member}/update', [App\Http\Controllers\MemberController::class, 'update'])->name('members.update');
     Route::get('/members/{member}/delete', [App\Http\Controllers\MemberController::class, 'delete'])->name('members.delete');
     Route::get('members/{member}/{status}/change_status',  [App\Http\Controllers\MemberController::class, 'change_status'])->name('members.change_status');
    
     //Categories 
     Route::get('/category/listing', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.listing');
     Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
     Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
     Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
     Route::post('/category/{category}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
     Route::get('/category/{category}/delete', [App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete');
     Route::get('category/{category}/{status}/change_status',  [App\Http\Controllers\CategoryController::class, 'change_status'])->name('category.change_status');

     

       //Techniques 
       Route::get('/technique/listing', [App\Http\Controllers\TechniqueController::class, 'index'])->name('technique.listing');
       Route::get('/technique/create', [App\Http\Controllers\TechniqueController::class, 'create'])->name('technique.create');
       Route::post('/technique/store', [App\Http\Controllers\TechniqueController::class, 'store'])->name('technique.store');
       Route::get('/technique/{technique}/edit', [App\Http\Controllers\TechniqueController::class, 'edit'])->name('technique.edit');
       Route::post('/technique/{technique}/update', [App\Http\Controllers\TechniqueController::class, 'update'])->name('technique.update');
       Route::get('/technique/{technique}/delete', [App\Http\Controllers\TechniqueController::class, 'delete'])->name('technique.delete');
       
     
     
     //Jobs
      Route::get('/jobs/listing', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.listing');
      Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
      Route::post('/jobs/store', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store');
      Route::post('/jobs/data', [App\Http\Controllers\JobController::class, 'get_data'])->name('jobs.data');
      Route::get('job_edit/{id}',[App\Http\Controllers\JobController::class, 'edit'])->name('job.edit');
      // Route::get('/jobs/{job}/edit', [App\Http\Controllers\JobController::class, 'edit'])->name('jobs.edit');
      Route::get('/jobs/{job}/show', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
      Route::post('/jobs/update', [App\Http\Controllers\JobController::class, 'update'])->name('jobs.update');
      // Route::post('/jobs/{job}/update', [App\Http\Controllers\JobController::class, 'update'])->name('jobs.update');
      Route::get('/jobs/delete/{id}', [App\Http\Controllers\JobController::class, 'delete'])->name('jobs.delete');
      // Route::get('/jobs/{job}/delete', [App\Http\Controllers\JobController::class, 'delete'])->name('jobs.delete');
      Route::get('jobs/{job}/{status}/change_status',  [App\Http\Controllers\JobController::class, 'change_status'])->name('jobs.change_status');
     





    //   Occupations
      Route::get('/occupations/listing', [App\Http\Controllers\OccupationController::class, 'index'])->name('occupations.listing');
      Route::get('/occupations/create', [App\Http\Controllers\OccupationController::class, 'create'])->name('occupations.create');
      Route::post('/occupations/store', [App\Http\Controllers\OccupationController::class, 'store'])->name('occupations.store');
      Route::get('/occupations/{any}/edit', [App\Http\Controllers\OccupationController::class, 'edit'])->name('occupations.edit');
      Route::get('/occupations/{any}/show', [App\Http\Controllers\OccupationController::class, 'show'])->name('occupations.show');
      
      Route::post('/occupations/update', [App\Http\Controllers\OccupationController::class, 'update'])->name('occupations.update');
      Route::get('/occupations/{occupation}/delete', [App\Http\Controllers\OccupationController::class, 'delete'])->name('occupations.delete');
      Route::get('occupations/{occupation}/{status}/change_status',  [App\Http\Controllers\OccupationController::class, 'change_status'])->name('occupations.change_status');

      // Subscription
      Route::get('/subscription/listing', [App\Http\Controllers\SubscriptionController::class, 'index'])->name('subscription.list');
});

//USER ROUTES
Route::group(['middleware' => ['auth', 'useractive'], 'prefix' => '/user'] , function() {
   
  Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.dashboard')->middleware('standardcheck');
  
  //Profile
  Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('user.profile');
  Route::post('/profile/{user}/updatepassword', [App\Http\Controllers\ProfileController::class, 'update_password'])->name('profile.updatepassword');

  Route::get('/profiles/listing', [App\Http\Controllers\ProfileController::class, 'index'])->name('profiles.listing');
  Route::POST('/profiles/answers', [App\Http\Controllers\ProfileController::class, 'answers'])->name('answers.chose');
  Route::post('/profiles/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profiles.update');

 //Education
  Route::get('/educations/listing', [App\Http\Controllers\EducationController::class, 'index'])->name('educations.listing');
  Route::get('/educations/getlist', [App\Http\Controllers\EducationController::class, 'getlist'])->name('educations.getlist');
  Route::get('/educations/create', [App\Http\Controllers\EducationController::class, 'create'])->name('educations.create');
  Route::post('/educations/store', [App\Http\Controllers\EducationController::class, 'store'])->name('educations.store');
  Route::post('/educations/edit', [App\Http\Controllers\EducationController::class, 'edit'])->name('educations.edit');
  Route::post('/educations/update', [App\Http\Controllers\EducationController::class, 'updates'])->name('educations.update');
  Route::get('/educations/{education}/delete', [App\Http\Controllers\EducationController::class, 'delete'])->name('educations.delete');
  Route::get('educations/{education}/{status}/change_status',  [App\Http\Controllers\EducationController::class, 'change_status'])->name('educations.change_status');
 

   //Jobs
   Route::get('/jobs/list', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.list')->middleware('premiumcheck');
   Route::get('/jobs/{job}/detail', [App\Http\Controllers\JobController::class, 'show'])->name('jobs.detail')->middleware('premiumcheck');
   Route::get('/jobs/recommend', [App\Http\Controllers\JobController::class, 'recommend_job'])->name('jobs.recommend')->middleware('premiumcheck');

 //Occupations
   Route::get('/ocupation/recommend', [App\Http\Controllers\OccupationController::class, 'recommend_occupation'])->name('occupation.recommend')->middleware('premiumcheck');
   Route::get('/occupations/{any}/show', [App\Http\Controllers\OccupationController::class, 'show'])->name('occupations.show');
   //Working
  Route::get('/workexperiences/listing', [App\Http\Controllers\WorkexperienceController::class, 'index'])->name('workexperiences.listing');
  Route::get('/workexperiences/getlist', [App\Http\Controllers\WorkexperienceController::class, 'getlist'])->name('workexperiences.getlist');
  Route::get('/workexperiences/create', [App\Http\Controllers\WorkexperienceController::class, 'create'])->name('workexperiences.create');
  Route::post('/workexperiences/store', [App\Http\Controllers\WorkexperienceController::class, 'store'])->name('workexperiences.store');
  Route::post('/workexperiences/edit', [App\Http\Controllers\WorkexperienceController::class, 'edit'])->name('workexperiences.edit');
  Route::post('/workexperiences/update', [App\Http\Controllers\WorkexperienceController::class, 'update'])->name('workexperiences.update');
  Route::get('/workexperiences/{workexperience}/delete', [App\Http\Controllers\WorkexperienceController::class, 'delete'])->name('workexperiences.delete');
  Route::get('workexperiences/{workexperience}/{status}/change_status',  [App\Http\Controllers\WorkexperienceController::class, 'change_status'])->name('workexperiences.change_status');

  // Subcription
  Route::get('/subscription/listing', [App\Http\Controllers\SubscriptionController::class, 'getSubscription'])->name('subscription.listing');
  // Route::get('/subscription/listing', [App\Http\Controllers\SubscriptionController::class, 'getSubscription'])->name('subscription.listing')->middleware('userprofilecheck');
  Route::post('/subscription/insert', [App\Http\Controllers\SubscriptionController::class, 'insertUserSubscription'])->name('subscription.insert');
  Route::post('subscription', [App\Http\Controllers\SubscriptionController::class, 'subscription'])->name("subscription.create");

});



Route::POST('/plan/update', [App\Http\Controllers\SubscriptionController::class, 'planupdate'])->name('plan.update');
Route::get('/UnSubcription/{id}', [App\Http\Controllers\SubscriptionController::class, 'UnSubcription']);
Route::get('/plan/list', [App\Http\Controllers\SubscriptionController::class, 'planlist'])->name('plan.list');
Route::get('/new_product',[App\Http\Controllers\SubscriptionController::class, 'pew_product']);
Route::POST('/create/product', [App\Http\Controllers\SubscriptionController::class, 'create_product'])->name('product.create');



Route::middleware(['guest'])->group(function () {
  // Route::get('/login', 'MyAuthController@login')->name('login');
  // Route::get('/register', 'MyAuthController@register')->name('register');
  // Route::get('/register', 'MyAuthController@register')->name('register');
  Route::post('/register', [App\Http\Controllers\MyAuthController::class, 'store'])->name('register');
  Route::get('/forgot', [App\Http\Controllers\MyAuthController::class, 'forgot'])->name('forgot');
  Route::post('forgot',[App\Http\Controllers\MyAuthController::class, 'forgot_password'])->name('forgot.password');
  Route::get('/otp', [App\Http\Controllers\MyAuthController::class, 'otp'])->name('otp');

  Route::get('verify-account/{id}',[App\Http\Controllers\MyAuthController::class, 'verifyAccountView']);
  Route::post('verify-account/{id}',[App\Http\Controllers\MyAuthController::class, 'verifyAccount']);

  Route::get('registration-resend-code/{id}',[App\Http\Controllers\MyAuthController::class, 'registration_resend_code']);

});

