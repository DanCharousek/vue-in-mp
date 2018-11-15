<?php

Route::group(['prefix' => 'bundle-per-app'], function () {
    Route::get('/', function () {
        return view('bundle-per-app.home');
    });

    Route::get('about', function () {
        return view('bundle-per-app.about');
    });

    Route::get('contact', function () {
        return view('bundle-per-app.contact');
    });
});

Route::group(['prefix' => 'bundle-per-page'], function () {
    Route::get('/', function () {
        return view('bundle-per-page.home');
    });

    Route::get('about', function () {
        return view('bundle-per-page.about');
    });

    Route::get('contact', function () {
        return view('bundle-per-page.contact');
    });
});

Route::group(['prefix' => 'bundle-per-app-2'], function () {
    Route::get('/', function () {
        return view('bundle-per-app-2.home');
    });

    Route::get('about', function () {
        return view('bundle-per-app-2.about');
    });

    Route::get('contact', function () {
        return view('bundle-per-app-2.contact');
    });
});