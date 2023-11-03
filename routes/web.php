
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;



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
// Route::controller(UserController::class)->group(function(){
//     Route::get('users', 'index');
//     Route::get('users-export', 'export')->name('users.export');
//     Route::post('users-import', 'import')->name('users.import');
// });

Route::get('index', [NewsController::class, 'index'])->name('index');


Route::post('news_import', [NewsController::class, 'news_import'])->name('news_import');
Route::get('register', [RegController::class, 'register'])->name('register');




