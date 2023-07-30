<?php

use App\Models\Contacts;
use App\Models\Motorcycle;
use App\Models\User;
use Faker\Factory;
use Faker\Provider\Fakecar;
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
Route::get('/oneToOne', function () {

    $faker = Factory::create();
    $faker->addProvider(new Fakecar($faker));

   $data = [
        'uid' => fake()->randomDigitNot(0) ,
        'brand' => $faker->vehicleBrand(),
        'model' => $faker->vehicleModel(),
   ];
   $motorcycle = new Motorcycle;
   $motorcycle->fill($data);
   $motorcycle->save();

   $user = User::find(8)->motorcycle;
//    $user = Motorcycle::find(1)->users;
   dd($user);
   return view('oneToOne', compact('user'));
});

Route::get('/oneToMany', function () {
    $data = [
        'uid' => fake()->randomDigitNot(0) ,
        'contact_no' => fake()->phoneNumber (),
        'email' => fake()->unique()->safeEmail(),
        'address' => fake()->address(),
    ];

    $contact = new Contacts;
    $contact->fill($data);
    $contact->save();

    $getAll = Contacts::all();

    $user = User::find(fake()->randomDigitNot(0));
    $getAll = $user->contacts;
    return view('index', compact('getAll'));
});

Route::get('/belongsTo', function () {

    $contact = Contacts::find(5);
    $getAll = $contact->users;
    dd($getAll);
    return view('index', compact('getAll'));
});

