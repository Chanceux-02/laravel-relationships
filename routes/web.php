<?php

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function () {
    $data = [
        'uid' => fake()->randomDigitNot(0) ,
        'contact_no' => fake()->phoneNumber (),
        'email' => fake()->unique()->safeEmail(),
        'address' => fake()->address(),
    ];

    $contact = new Contacts;
    // $contact->fill($data);
    // $contact->save();

    // $getAll = contacts::all();

    $user = User::find(fake()->randomDigitNot(0));
    $getAll = $user->Contacts;
    return view('index', compact('getAll'));
});
