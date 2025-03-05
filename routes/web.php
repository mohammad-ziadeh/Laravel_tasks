<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});

//1---------------------------------------------------------------

// Route::get('/task1', function () {
//     return 'Hello world!';
// });

//2---------------------------------------------------------------

// Route::get('/task2/{Name}', function ($Name) {
//     return 'hello,' . $Name;
// });

//3---------------------------------------------------------------

// Route::get('/task3/{age?}', function ($age) {
//     if (isset($age)) {
//         return "You are $age years old";
//     } else {
//         return "Age not provided";
//     };
// });

//4---------------------------------------------------------------

Route::get('/task4', [PostController::class, 'task']);

//5---------------------------------------------------------------

Route::get('/task5', function () {
    return 'Hello world!';
})->name('task5');

//6---------------------------------------------------------------

Route::group([
    'prefix' => 'task6/',
], function () {
    Route::get('', function () {
        return 'First child route';
    });
    Route::get('V2Task6', function () {
        return 'Sec child route';
    });
});

//7---------------------------------------------------------------

Route::get('/task7/{id}', function ($id) {
    return 'User ID id' . $id;
});

//8---------------------------------------------------------------

Route::fallback( function () {
    return 'Page not found';
});
//9---------------------------------------------------------------

Route::resource( '/task9', PostController::class);


//10---------------------------------------------------------------

Route::get('/task10/{Cat}/{id}', function ($Cat,$id) {
    return "this is $Cat with id $id";
});

//11---------------------------------------------------------------

Route::get('/task11/{id?}', function ($id = 1) {
    return 'hi student and your id is ->' . $id;
});

//12---------------------------------------------------------------

Route::redirect('/task12', '/task11');

//13---------------------------------------------------------------

// Route::get('/', function () {
//     return view('contact');
// });

