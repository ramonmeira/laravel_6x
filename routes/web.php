<?php

Route::match(['get','post'],'/match', function() {
    return 'match';
});

Route::any('/any', function() {
    return 'any';
});

Route::post('/register', function() {
    return '';
});

Route::get('/contato', function() {
    return view('site.contact');
});

Route::get('/empresa', function() {
    return 'Empresa';
});

Route::get('/', function () {
    return view('welcome');
});
