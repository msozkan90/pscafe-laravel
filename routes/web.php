<?php

use Illuminate\Support\Facades\Route;
use App\Models\Announcement;
use \App\Http\Middleware\AdminCtrl;
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
Route::get('/', [\App\Http\Controllers\indexController::class,'index'])->name('welcome');
Route::get('/sss', [\App\Http\Controllers\sssController::class,'sss'])->name('sss');
Route::get('/prices', [\App\Http\Controllers\priceController::class,'price'])->name('price');

//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');

Route::get('/meetings', function () {
    return view('meetings');
})->name('meetings');
Route::get('/meeting-details', function () {
    return view('meeting-details');
})->name('meeting-details');


//Route::get('/contact', function () {
//    return view('mail.contact');
//})->name('contact');


//Route::get('/register', function () {
//    return view('register');
//})->name('register');
//Route::post('/register', function () {
//    return view('register');
//})->name('register');

Auth::routes();
Route::get('/announcement', [\App\Http\Controllers\AnnouncementController::class,'Announcement'])->name('announcement');
Route::post('/announcement-post', [\App\Http\Controllers\AnnouncementController::class,'Announcement_getdata']);
Route::get('/announcement/{id}', [\App\Http\Controllers\AnnouncementController::class,'single_announcement'])->name('announcement-detail');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class,'perform'])->name('logout.perform');
});
Route::group(['namespace'=>'App\Http\Controllers\admin','prefix'=>'admin','as'=>'admin.','middleware'=>['auth','AdminCtrl']],function(){
    Route::group(['namespace'=>'panel','prefix'=>'panel','as'=>'admin_panel.'],function () {
        Route::get('/','\App\Http\Controllers\admin\adminController@dashboard')->name('index_admin');
        Route::post('/','\App\Http\Controllers\admin\adminController@announcement_store')->name('add.post');
//        Route::get('/data-visualization','\App\Http\Controllers\admin\adminController@panel2')->name('data-visualization');
//        Route::get('/maps','\App\Http\Controllers\admin\adminController@panel5')->name('maps');
//        Route::get('/manage-users','\App\Http\Controllers\admin\adminController@panel4')->name('manage-users');
//        Route::get('/preferences','\App\Http\Controllers\admin\adminController@panel6')->name('preferences');
//        Route::get('/login','\App\Http\Controllers\admin\adminController@panel3')->name('login');

    });
    Route::get('/dashboard','adminController@dashboard')->name('dashboard');
    Route::group(['namespace'=>'announcement','prefix'=>'announcement','as'=>'announcement.'],function (){
        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@announcement_delete')->name('delete');
        Route::get('/edit/{id}','\App\Http\Controllers\admin\adminController@announcement_edit')->name('edit');
        Route::post('/edit/{id}','\App\Http\Controllers\admin\adminController@announcement_update')->name('edit.post');
    });
    Route::group(['namespace'=>'prices','prefix'=>'prices','as'=>'prices.'],function (){
        Route::get('/','\App\Http\Controllers\admin\adminController@prices_dashboard')->name('dashboard');
        Route::get('/add','\App\Http\Controllers\admin\adminController@prices_add')->name('add');
        Route::post('/add','\App\Http\Controllers\admin\adminController@prices_store')->name('add.post');
        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@prices_delete')->name('delete');
        Route::get('/edit/{id}','\App\Http\Controllers\admin\adminController@prices_edit')->name('edit');
        Route::post('/edit/{id}','\App\Http\Controllers\admin\adminController@prices_update')->name('edit.post');
    });
    Route::group(['namespace'=>'mail','prefix'=>'mail','as'=>'mail.'],function (){
        Route::get('/','\App\Http\Controllers\admin\adminController@mail_dashboard')->name('dashboard');
//        Route::post('/add','\App\Http\Controllers\admin\adminController@mail_store')->name('add.post');
        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@mail_delete')->name('delete');
//        Route::get('/edit/{id}','\App\Http\Controllers\admin\adminController@mail_edit')->name('edit');
//        Route::post('/edit/{id}','\App\Http\Controllers\admin\adminController@mail_update')->name('edit.post');
    });
    Route::group(['namespace'=>'sss','prefix'=>'sss','as'=>'sss.'],function (){
        Route::get('/','\App\Http\Controllers\admin\adminController@sss_dashboard')->name('dashboard');
        Route::get('/add','\App\Http\Controllers\admin\adminController@sss_add')->name('add');
        Route::post('/add','\App\Http\Controllers\admin\adminController@sss_store')->name('add.post');
        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@sss_delete')->name('delete');
        Route::get('/edit/{id}','\App\Http\Controllers\admin\adminController@sss_edit')->name('edit');
        Route::post('/edit/{id}','\App\Http\Controllers\admin\adminController@sss_update')->name('edit.post');
    });
    Route::group(['namespace'=>'users','prefix'=>'users','as'=>'users.'],function (){
        Route::get('/','\App\Http\Controllers\admin\adminController@users_dashboard')->name('dashboard');
        Route::get('/add','\App\Http\Controllers\admin\adminController@users_add')->name('add');
        Route::post('/add','\App\Http\Controllers\admin\adminController@users_store')->name('add.post');
        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@users_delete')->name('delete');
        Route::get('/edit/{id}','\App\Http\Controllers\admin\adminController@users_edit')->name('edit');
        Route::post('/edit/{id}','\App\Http\Controllers\admin\adminController@users_update')->name('edit.post');
    });
    });

//    Route::get('/','indexController@index')->name('index');
//    Route::get('/ekle','indexController@create')->name('create');
//    Route::post('/ekle','indexController@store')->name('create.post');
//    Route::get('/duzenle/{id}','indexController@edit')->name('edit');
//    Route::post('/duzenle/{id}','indexController@update')->name('edit.post');
//    Route::get('/sil/{id}','indexController@delete')->name('delete');





//Route::get('/contact','App\Http\Controllers\mailController@send')->name('contact');
Route::get('/contact', function () {
    return view('mail.contact');
})->name('contact');
//Route::get('mail', function () {
//
//    $details = [
//        'title' => 'Mail from ItSolutionStuff.com',
//        'body' => 'This is for testing email using smtp'
//    ];
//
//    \Mail::to('msozkan90@gmail.com')->send(new \App\Mail\MyTestMail($details));
//
//    dd("Email is Sent.");
//});

Route::post('/contact','\App\Http\Controllers\mailController@mail_post')->name('mail-post');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
