<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('delete_news/{id}', [NewsController::class, 'delete_news'])->name('delete_news');

Route::middleware('auth:sanctum')->group( function () {
    Route::get('news_index', [NewsController::class, 'news_index'])->name('news_index');
    Route::post('bookmark/option/{id}', [NewsController::class, 'bookmark_status'])->name('bookmark_status');

    Route::resource('products', ProductController::class);
    Route::post('store',[ProductController::class, 'store']);
    Route::post('update/{id}',[ProductController::class, 'update']);
    Route::get('show/{id}',[ProductController::class, 'show']);
    Route::post('delete/{id}',[ProductController::class, 'delete']);


});