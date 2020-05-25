<?php

Route::get('produtos/{idPordutos?}/details', function($idPordutos = '') {
    return "Produto(s): {$idPordutos}";
});

Route::get('categoria/{flag}/posts', function($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('categoria/{flag}', function($flag) {
    return "Produtos da categoria: {$flag}";
});

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
