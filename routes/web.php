<?php
use App\Http\Controllers\ContactController;
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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');
})->name('home');





Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');