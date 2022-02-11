<?php

use Illuminate\Support\Facades\Route;
use App\Models\Announcement;
use \App\Http\Middleware\AdminCtrl;


Route::get('/', [\App\Http\Controllers\indexController::class,'index'])->name('welcome');
Route::get('/sss', [\App\Http\Controllers\sssController::class,'sss'])->name('sss');
Route::get('/prices', [\App\Http\Controllers\priceController::class,'price'])->name('price');



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

        Route::get('/delete/{id}','\App\Http\Controllers\admin\adminController@mail_delete')->name('delete');

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






Route::get('/contact', function () {
    return view('mail.contact');
})->name('contact');


Route::post('/contact','\App\Http\Controllers\mailController@mail_post')->name('mail-post');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
