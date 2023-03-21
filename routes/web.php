<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TouristController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TouristregisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HotelBookingController;
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

//auth routes this is for admin routes
Auth::routes();

Route::get('/', [WelcomeController::class ,'welcome'])->name('welcome');



//guest views
Route::get('/loginpage', [App\Http\Controllers\HomeController::class, 'loginpage'])->name('loginpage');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'Blog'])->name('blog');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'Contact'])->name('contact');
Route::get('/places', [App\Http\Controllers\PlaceController::class, 'welcomeplace'])->name('places');
Route::get('/ViewAllPlaces',[PlaceController::class,'ViewAllPlaces']);
Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'welcomehotel'])->name('hotel');
Route::get('/place/{placeId}/show', [PlaceController::class, 'show'])->name('place.show');




//posts
Route::get('/posts/{postId}/show', [PostController::class, 'show'])->name('posts.show');

//only post can be added by admins(admin hotel and travel) so this crud operations only for admins
Route::group(['middleware'=>'auth'], function(){

    
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/all', [HomeController::class, 'allPosts'])->name('posts.all');
Route::get('/posts/{postId}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('/posts/{postId}/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/{postId}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/addpost', [App\Http\Controllers\PostController::class, 'Addpost'])->name('addpost');

//add hotels
Route::post('/hotel/store', [HotelController::class, 'store'])->name('hotel.store');
Route::get('/hotel/{hotelId}/edit', [HotelController::class, 'edit'])->name('hotel.edit');
Route::post('/hotel/{hotelId}/update', [HotelController::class, 'update'])->name('hotel.update');
Route::get('/hotel/{hotelId}/delete', [HotelController::class, 'delete'])->name('hotel.delete');

Route::get('/addhotelview', [App\Http\Controllers\HotelController::class, 'Addhotelview'])->name('addhotel');

Route::get('/accepthotel/{bookingId}', [App\Http\Controllers\HotelBookingController::class, 'accept'])->name('accepthotel');
Route::get('/cancelhotel/{bookingId}', [App\Http\Controllers\HotelBookingController::class, 'cancel'])->name('cancelhotel');

});
//places add crud

//this is only for Admin
Route::group(['middleware'=>'auth'], function(){
    Route::post('/place/store', [PlaceController::class, 'store'])->name('place.store');
    Route::get('/place/{placeId}/edit', [PlaceController::class, 'edit'])->name('place.edit');
    Route::post('/place/{placeId}/update', [PlaceController::class, 'update'])->name('place.update');
    Route::get('/place/{placeId}/delete', [PlaceController::class, 'delete'])->name('place.delete');
    Route::get('/addplaces', [App\Http\Controllers\Admin\DashboardController::class, 'addplacesview'])->name('admin.addplaces');

});
//admin users pages


Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
  
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/users/{userId}/delete', [UserController::class, 'delete'])->name('user.delete');
    Route::post('/users/{id}/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/users/create', [UserController::class, 'createUser'])->name('user.create');
    //views
    Route::get('/addhotel', [UserController::class, 'addhotel'])->name('admin.addhotel');
    Route::get('/addtravel', [UserController::class, 'addtravel'])->name('admin.addtravel');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');

});
   
//tourist auth routes
  
Route::get('/create_tourist', [App\Http\Controllers\TouristController::class, 'createTourist'])->name('create_tourist');
Route::get('/loginTourist', [App\Http\Controllers\TouristController::class, 'loginTourist'])->name('loginTourist');
Route::group(['middleware'=>'guest:tourist'], function(){

    
        Route::post('/create', [App\Http\Controllers\TouristregisterController::class, 'create'])->name('create');
        Route::post('/lTourist', [App\Http\Controllers\TouristregisterController::class, 'lTourist'])->name('lTourist');

        Route::get('/tourist_dashboard', [App\Http\Controllers\TouristController::class, 'dashboardTourist'])->name('tourist_dashboard');
        Route::get('/touristWelcome', [App\Http\Controllers\TouristController::class, 'touristWelcome'])->name('touristWelcome');
        Route::get('/touristProfile', [App\Http\Controllers\TouristController::class, 'touristProfile'])->name('touristProfile');
        Route::get('/touristBlog', [App\Http\Controllers\TouristController::class, 'touristBlog'])->name('touristBlog');
        Route::get('/touristContact', [App\Http\Controllers\TouristController::class, 'touristContact'])->name('touristContact');
        Route::get('/touristPlaces', [App\Http\Controllers\TouristController::class, 'touristPlace'])->name('touristPlace');
//bookig hotel
        Route::post('/bookhotel', [App\Http\Controllers\HotelBookingController::class, 'store'])->name('bookhotel');
        Route::get('/bookhotel/{bookingId}/delete', [HotelBookingController::class, 'delete'])->name('bookhotel.delete');
        Route::get('/hotel/{hotelId}/view', [HotelController::class, 'show'])->name('hotel.view');
});

