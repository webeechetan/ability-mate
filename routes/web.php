<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Website\Home;
use App\Livewire\Website\Auth\Register;
use App\Livewire\Website\Auth\Login;
use App\Livewire\Website\Member\MembersList;
use App\Livewire\Website\Member\MyProfile;


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

// Route::get('/', function () {
//     return view('layouts.website.app');
// });

Route::get('/', Home::class)->name('home');
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('home'));
})->name('logout');

Route::get('/members', MembersList::class)->name('members-list');
Route::get('/my-profile', MyProfile::class)->name('my-profile');

