<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Category;
use App\Models\Mechanic;

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

Route::get('/', function () {

    // $phone= User::find(1);
    // $phone= User::find(2)->phone;
    // // return $phone;
    //  $user= Phone::find(1);
    // $user= Phone::find(1)->user;
    //
    // $users= User::all();
    // $comments= Post::find(1);
    // $comments= Post::find(1)->comments;
    // $posts= Post::with('categories')->get();
    // return $posts;
    $mechanics= Mechanic::with('carOwner')->get();
    // return $mechanics;
    return view('welcome', compact('mechanics'));
});
