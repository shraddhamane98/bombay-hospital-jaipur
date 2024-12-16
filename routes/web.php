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

Route::get('consultants', function () {
    return view('consultants');
})->name('consultants');

Route::get('dr-vaibhav-trivedi', function () {
    return view('docors-profiles.dr-vaibhav-trivedi');
})->name('dr-vaibhav-trivedi');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('founders', function () {
    return view('founders');
})->name('founders');

Route::get('radiation-oncology', function () {
    return view('departments.radiation-oncology');
})->name('radiation-oncology');

Route::get('critical-care-medicine', function () {
    return view('departments.critical-care-medicine');
})->name('critical-care-medicine');

Route::get('ENT-&-laryngology', function () {
    return view('departments.ENT-&-laryngology');
})->name('ENT-&-laryngology');

Route::get('haemato-oncology', function () {
    return view('departments.haemato-oncology');
})->name('haemato-oncology');

Route::get('general-medicine-&-infectious-diseases', function () {
    return view('departments.general-medicine-&-infectious-diseases');
})->name('general-medicine-&-infectious-diseases');

Route::get('gastroenterology', function () {
    return view('departments.gastroenterology');
})->name('gastroenterology');

Route::get('neurology', function () {
    return view('departments.neurology');
})->name('neurology');

Route::get('neurosurgery', function () {
    return view('departments.neurosurgery');
})->name('neurosurgery');

Route::get('spine-surgery', function () {
    return view('departments.spine-surgery');
})->name('spine-surgery');

Route::get('cardiology', function () {
    return view('departments.cardiology');
})->name('cardiology');

Route::get('pediatrics', function () {
    return view('departments.pediatrics');
})->name('pediatrics');

Route::get('orthopaedic', function () {
    return view('departments.orthopaedic');
})->name('orthopaedic');

Route::get('pathology', function () {
    return view('departments.pathology');
})->name('pathology');



Route::get('general-surgery', function () {
    return view('departments.general-surgery');
})->name('general-surgery');

Route::get('surgical-oncology', function () {
    return view('departments.surgical-oncology');
})->name('surgical-oncology');

Route::get('philosophy', function () {
    return view('philosophy');
})->name('philosophy');

Route::get('newspaper', function () {
    return view('newspaper');
})->name('newspaper');

Route::get('spotlight', function () {
    return view('spotlight');
})->name('spotlight');

Route::get('upcoming-conference', function () {
    return view('upcoming-conference');
})->name('upcoming-conference');












Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');