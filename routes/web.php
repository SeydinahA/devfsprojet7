<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.dashboard');
});
Route::get('/alerts.html', function () {
    return view('bootstrap-ui.alerts');
});
Route::get('/buttons.html', function() {
    return view('bootstrap-ui.buttons');
});
Route::get('/dropdowns.html', function (){
    return view('bootstrap-ui.dropdowns');
});
Route::get('/modals.html', function() {
    return view('bootstrap-ui.modals');
});
Route::get('/popovers.html', function() {
    return view('bootstrap-ui.popovers');
});
Route::get('/progress-bar.html', function() {
    return view('bootstrap-ui.progress-bar');
});
Route::get('/form_basics.html', function () {
    return view('forms.form_basics');
});
Route::get('/form_advanceds.html', function() {
    return view('forms.form_advanceds');
});
Route::get('/simple-tables.html', function() {
    return view('tables.simple-tables');
});
Route::get('/datatables.html', function() {
    return view('tables.datatables');
});
Route::get('/ui-colors.html', function() {
    return view('ui-colors.ui-colors');
});
Route::get('/charts.html', function() {
    return view('charts.charts');
});
Route::get('/login.html', function() {
    return view('pages.login');
});
Route::get('/register.html', function() {
    return view('pages.register');
});
Route::get('/404.html', function() {
    return view('pages.404');
});
Route::get('/blank.html', function() {
    return view('pages.blank');
});