<?php

use Illuminate\Support\Facades\Route;

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

    return view('welcome');

});

Route::get('/user/{name?}', function (string $name = null) {

    return json_encode([
        'name' => ($name) ? $name : 'no name'
    ], JSON_PRETTY_PRINT);

});

Route::get('/laravel', function () {

    return 'That is a new route';

});

Route::get('/rules/{word}/{number}', function (string $word, int $number) {

    return str_repeat("$word ", $number);

})->where('word', '[A-Za-z]+')->where('number', '[0-9]+');

Route::prefix('/group')->group(function () {

    Route::get('/', function () {

        return 'group main';

    });

    Route::get('/colors', function () {

        return array_values(['red', 'purple', 'gray', 'brown']);

    });

    Route::get('/multiplication/{x}/{y}', function (int $x, int $y) {

        return $x * $y;

    })->where('x', '[0-9]+')->where('y', '[0-9]+');

    Route::get('/phrase', function () {

        return 'Just a phrase';

    });

});

Route::prefix('naming')->group( function () {

    Route::get('/', function () {
        return view('main');
    })->name('naming');

    Route::get('/colors', function () {
        return view('colors');
    })->name('naming.colors');

    Route::get('/users', function () {
        return view('users');
    })->name('naming.users');

});

Route::get('/show-products', function () {
    echo 'some products';
})->name('products');

Route::redirect('addproduct', 'products', 301);

Route::get('addproduct2', function () {
    return redirect()->route('products');
});

Route::post('/posted', function () {
    return json_encode(['it is a' => 'post route'], JSON_PRETTY_PRINT);
});

Route::delete('/deleted', function () {
    return json_encode(['it is a' => 'delete route'], JSON_PRETTY_PRINT);
});