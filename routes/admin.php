 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PosterAdressController;
use App\Http\Controllers\PosterController;

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


//dashpord routes
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/news', NewsController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/posterAdress', PosterAdressController::class);
    Route::resource('/poster', PosterController::class);
    Route::put('news_push/{id}', [NewsController::class, 'news_push'])->name('news_push');

});
