<?php

use App\Http\Controllers\TestController;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\TestCollection;

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

Route::get('/',[TestController::class,'index'])->name('test.index');
Route::get('/user-post',[TestController::class,'userPost'])->name('test.userPost');
Route::get('/post',[TestController::class,'post'])->name('test.post');
Route::get('/category',[TestController::class,'category'])->name('test.category');


Route::get('/user_delete',[TestController::class,'delete'])->name('test.delete');
Route::get('/user-contact-contactinfo',[TestController::class,'userContactContactInfo'])->name('test.contact.contactinfo');
Route::get('/user-contactinfo',[TestController::class,'userContact'])->name('user.contactinfo');


// code for HasManyThrough
Route::get('/country',[TestController::class,'country'])->name('country');
Route::get('/country-state-city',[TestController::class,'countryStateCity'])->name('country.state.city');
Route::get('/country-city',[TestController::class,'countryCity'])->name('country.city');


// one to one polymorphic Relations
Route::get('/user-image',[TestController::class,'userImage'])->name('user.image');
Route::get('/post-image',[TestController::class,'postImage'])->name('user.post');


// one to many polymorphic Relations
Route::get('/user-images',[TestController::class,'userImages'])->name('user.images');
Route::get('/post-images',[TestController::class,'postImages'])->name('post.images');

//many to many polymorphic Relations



