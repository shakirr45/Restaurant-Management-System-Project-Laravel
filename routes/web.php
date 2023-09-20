<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




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
//     return view('welcome');
// });

//for home page chage this /home after the authn as login or out ===>
Route::get('/',[HomeController::class, 'index']);
Route::get('/redirects',[HomeController::class, 'redirects']);

//for view user as admin ====>
Route::get('/urses', [AdminController::class, 'users']);

//for delete user as admin ===>
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);

//add food as admin ===>
Route::get('/foodmenu', [AdminController::class, 'foodmenu']);
Route::post('/upload_food', [AdminController::class, 'upload_food']);

//for delete food ===>
Route::get('/delete_food/{id}', [AdminController::class, 'delete_food']);


//for update food ===>
Route::get('/update_food/{id}', [AdminController::class, 'update_food']);
Route::post('/edit_food/{id}', [AdminController::class, 'edit_food']);

//Create reservation post ===>
Route::post('/reservation', [AdminController::class, 'reservation']);


//Show reservation post as admin===>
Route::get('/adminreservation', [AdminController::class, 'adminreservation']);


//Add chefs as admin===>
Route::get('/chefs', [AdminController::class, 'chefs']);
Route::post('/add_chefs', [AdminController::class, 'add_chefs']);

//Update chefs ===>
Route::get('/update_chefs/{id}', [AdminController::class, 'update_chefs']);
Route::post('/main_update_chefs/{id}', [AdminController::class, 'main_update_chefs']);

//Delete chefs ===>
Route::get('/delete_chefs/{id}', [AdminController::class, 'delete_chefs']);

// addcart ===>
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

//show cart ====>
Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

//delete cart data ====>
Route::get('/remove/{id}', [HomeController::class, 'remove']);


































Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


