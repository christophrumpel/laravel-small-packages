<?php

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\CreateUserController;
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

Route::get('/tweet', function () {
    $connection = new TwitterOAuth(
        config('services.twitter.consumer_key'),
        config('services.twitter.consumer_secret'),
        config('services.twitter.access_token'),
        config('services.twitter.access_token_secret')

    );
    $connection->setApiVersion('2');
    $connection->post('tweets', ['text' => 'hello world']);
});

Route::post('/create-user', CreateUserController::class)
    ->name('create-user');

Route::post('/posts', CreatePostController::class)
    ->name('create-post');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('test', function () {
    ray()
        ->newScreen()
        ->queries();
    return User::find(3);
});
