<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mohd\Contact\Http\Controllers\ContactController;



Route::controller(ContactController::class)->group(function () {
    Route::get('contact','index')->name('contact');
    Route::post('contact','send');
});
