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



Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'index'])->name('leaderboard');
Route::get('/latihan', [App\Http\Controllers\LatihanController::class, 'index'])->name('latihan');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\UserController::class, 'update_avatar'])->name('profileupdate');

// ADMIN
Route::middleware(['auth.admin'])->group(function () {
    //HTML
    Route::get('/admin/materi/html', [App\Http\Controllers\AdminPanelController::class, 'materi_html'])->name('materi_html');
    Route::get('/admin/materi/html/insert', [App\Http\Controllers\AdminPanelController::class, 'create_html'])->name('create_html');
    Route::post('/admin/materi/html/insert', [App\Http\Controllers\AdminPanelController::class, 'store_html'])->name('store_html');
    Route::get('/admin/materi/html/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_html'])->name('edit_html');
    Route::patch('/admin/materi/html/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_html'])->name('update_html');
    Route::delete('/admin/materi/html/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_html'])->name('delete_html');
    //CSS
    Route::get('/admin/materi/css', [App\Http\Controllers\AdminPanelController::class, 'materi_css'])->name('materi_css');
    Route::get('/admin/materi/css/insert', [App\Http\Controllers\AdminPanelController::class, 'create_css'])->name('create_css');
    Route::post('/admin/materi/css/insert', [App\Http\Controllers\AdminPanelController::class, 'store_css'])->name('store_css');
    Route::get('/admin/materi/css/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_css'])->name('edit_css');
    Route::patch('/admin/materi/css/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_css'])->name('update_css');
    Route::delete('/admin/materi/css/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_css'])->name('delete_css');
    //JS
    Route::get('/admin/materi/js', [App\Http\Controllers\AdminPanelController::class, 'materi_js'])->name('materi_js');
    Route::get('/admin/materi/js/insert', [App\Http\Controllers\AdminPanelController::class, 'create_js'])->name('create_js');
    Route::post('/admin/materi/js/insert', [App\Http\Controllers\AdminPanelController::class, 'store_js'])->name('store_js');
    Route::get('/admin/materi/js/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_js'])->name('edit_js');
    Route::patch('/admin/materi/js/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_js'])->name('update_js');
    Route::delete('/admin/materi/js/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_js'])->name('delete_js');
    //LIST MATERI
    Route::get('/admin/listmateri', [App\Http\Controllers\AdminPanelController::class, 'list_materi'])->name('list_materi');
    Route::get('/admin/listmateri/insert', [App\Http\Controllers\AdminPanelController::class, 'create_list_materi'])->name('create_list_materi');
    Route::post('/admin/listmateri/insert', [App\Http\Controllers\AdminPanelController::class, 'store_list_materi'])->name('store_list_materi');
    Route::get('/admin/listmateri/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_list_materi'])->name('edit_list_materi');
    Route::patch('/admin/listmateri/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_list_materi'])->name('update_list_materi');
    Route::delete('/admin/listmateri/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_list_materi'])->name('delete_list_materi');
    //LIST LATIHAN
    Route::get('/admin/listlatihan', [App\Http\Controllers\AdminPanelController::class, 'list_latihan'])->name('list_latihan');
    Route::get('/admin/listlatihan/insert', [App\Http\Controllers\AdminPanelController::class, 'create_list_latihan'])->name('create_list_latihan');
    Route::post('/admin/listlatihan/insert', [App\Http\Controllers\AdminPanelController::class, 'store_list_latihan'])->name('store_list_latihan');
    Route::get('/admin/listlatihan/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_list_latihan'])->name('edit_list_latihan');
    Route::patch('/admin/listlatihan/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_list_latihan'])->name('update_list_latihan');
    Route::delete('/admin/listlatihan/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_list_latihan'])->name('delete_list_latihan');
    //TOOLS
    Route::get('/admin/tools', [App\Http\Controllers\AdminPanelController::class, 'tools'])->name('tools');
    Route::get('/admin/tools/insert', [App\Http\Controllers\AdminPanelController::class, 'create_tools'])->name('create_tools');
    Route::post('/admin/tools/insert', [App\Http\Controllers\AdminPanelController::class, 'store_tools'])->name('store_tools');
    Route::get('/admin/tools/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_tools'])->name('edit_tools');
    Route::patch('/admin/tools/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_tools'])->name('update_tools');
    Route::delete('/admin/tools/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_tools'])->name('delete_tools');
    //TUTOR
    Route::get('/admin/tutor', [App\Http\Controllers\AdminPanelController::class, 'tutor'])->name('tutor');
    Route::get('/admin/tutor/insert', [App\Http\Controllers\AdminPanelController::class, 'create_tutor'])->name('create_tutor');
    Route::post('/admin/tutor/insert', [App\Http\Controllers\AdminPanelController::class, 'store_tutor'])->name('store_tutor');
    Route::get('/admin/tutor/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'edit_tutor'])->name('edit_tutor');
    Route::patch('/admin/tutor/{id}', [App\Http\Controllers\AdminPanelController::class, 'update_tutor'])->name('update_tutor');
    Route::delete('/admin/tutor/{id}', [App\Http\Controllers\AdminPanelController::class, 'delete_tutor'])->name('delete_tutor');

    // LATIHAN
    //html
    Route::get('/admin/latihan/html', [App\Http\Controllers\AdminPanelController::class, 'latihan_html'])->name('mc_latihan_html');
    Route::get('/admin/latihan/html/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_create_html'])->name('latihan_create_html');
    Route::post('/admin/latihan/html/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_store_html'])->name('latihan_store_html');
    Route::get('/admin/latihan/html/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_edit_html'])->name('latihan_edit_html');
    Route::patch('/admin/latihan/html/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_update_html'])->name('latihan_update_html');
    Route::delete('/admin/latihan/html/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_delete_html'])->name('latihan_delete_html');
    //css
    Route::get('/admin/latihan/css', [App\Http\Controllers\AdminPanelController::class, 'latihan_css'])->name('mc_latihan_css');
    Route::get('/admin/latihan/css/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_create_css'])->name('latihan_create_css');
    Route::post('/admin/latihan/css/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_store_css'])->name('latihan_store_css');
    Route::get('/admin/latihan/css/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_edit_css'])->name('latihan_edit_css');
    Route::patch('/admin/latihan/css/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_update_css'])->name('latihan_update_css');
    Route::delete('/admin/latihan/css/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_delete_css'])->name('latihan_delete_css');
    //js
    Route::get('/admin/latihan/js', [App\Http\Controllers\AdminPanelController::class, 'latihan_js'])->name('mc_latihan_js');
    Route::get('/admin/latihan/js/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_create_js'])->name('latihan_create_js');
    Route::post('/admin/latihan/js/insert', [App\Http\Controllers\AdminPanelController::class, 'latihan_store_js'])->name('latihan_store_js');
    Route::get('/admin/latihan/js/edit/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_edit_js'])->name('latihan_edit_js');
    Route::patch('/admin/latihan/js/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_update_js'])->name('latihan_update_js');
    Route::delete('/admin/latihan/js/{id}', [App\Http\Controllers\AdminPanelController::class, 'latihan_delete_js'])->name('latihan_delete_js');
});









// MATERI
Route::get('/materi/html', [App\Http\Controllers\PageHTMLController::class, 'index'])->name('html');
Route::get('/materi/css', [App\Http\Controllers\PageCSSController::class, 'index'])->name('css');
Route::get('/materi/js', [App\Http\Controllers\PageJSController::class, 'index'])->name('js');
Route::get('/materi/laravel', [App\Http\Controllers\PageLaravelController::class, 'index'])->name('laravel');
Route::get('/materi/python', [App\Http\Controllers\PagePythonController::class, 'index'])->name('python');
Route::get('/materi/bootstrap4', [App\Http\Controllers\PageBootstrap4Controller::class, 'index'])->name('bootstrap4');
Route::get('/materi/figma', [App\Http\Controllers\PageFigmaController::class, 'index'])->name('figma');
Route::get('/materi/matplotlib', [App\Http\Controllers\PageMatplotlibController::class, 'index'])->name('matplotlib');
Route::get('/materi/github', [App\Http\Controllers\PageGithubController::class, 'index'])->name('github');
// LATIHAN HTML
Route::get('/latihan/html', [App\Http\Controllers\MultipleChoiceController::class, 'index'])->name('mc');
Route::patch('/latihan/html/{html}', [App\Http\Controllers\MultipleChoiceController::class, 'update'])->name('mcupdate');
Route::get('/latihan/recap', [App\Http\Controllers\RecapMc::class, 'index'])->name('recapmc');
Route::patch('/latihan/html/recap/finalscore/{finalscore}', [App\Http\Controllers\FinalMc::class, 'update'])->name('updatefinalrecapmc');

// LATIHAN CSS
Route::get('/latihan/css', [App\Http\Controllers\MultipleChoiceCSSController::class, 'index'])->name('latihan_css');
Route::patch('/latihan/css/{css}', [App\Http\Controllers\MultipleChoiceCSSController::class, 'update'])->name('latihan_css_update');
Route::get('/latihan/recap/css', [App\Http\Controllers\RecapCSS::class, 'index'])->name('recapcss');
Route::patch('/latihan/css/recap/finalscore/{finalscore}', [App\Http\Controllers\FinalCSS::class, 'update'])->name('updatefinalrecap_css');

// LATIHAN JS
Route::get('/latihan/js', [App\Http\Controllers\MultipleChoiceJSController::class, 'index'])->name('latihan_js');
Route::patch('/latihan/js/{js}', [App\Http\Controllers\MultipleChoiceJSController::class, 'update'])->name('latihan_js_update');
Route::get('/latihan/recap/js', [App\Http\Controllers\RecapJS::class, 'index'])->name('recapjs');
Route::patch('/latihan/js/recap/finalscore/{finalscore}', [App\Http\Controllers\FinalJS::class, 'update'])->name('updatefinalrecap_js');

// Google login
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
