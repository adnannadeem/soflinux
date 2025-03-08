<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [App\Http\Controllers\Website\PagesController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Website\PagesController::class, 'index'])->name('home_index');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/mock/{workSpaceId}/{any?}', function ($workSpaceId, $any = null) {
    dd($workSpaceId, $any);
});


Route::get('/mock', function ($workSpaceId, $any = null) {
    // This will capture the entire URL after '/mock/{workSpaceId}/'

    // You can process the captured URL or do your logic here.

    // dd([
    //     'workSpaceId' => $workSpaceId,
    //     'requestUrl' => request()->path(),  // Full URL path
    //     'any' => $any
    // ]);
});