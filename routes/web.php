<?php

Route::get('/products', 'ProductController@index')->name('products.index');

/*Route::middleware([])->group(function(){
	Route::prefix('admin')->group(function(){
		//Route::get('/admin/', ...
		Route::namespace('Admin')->group(function(){
			//Route::get('/', 'Admin\TesteController@teste');
			Route::name('admin.')->group(function(){
				Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');
				Route::get('/financeiro','TesteController@financeiro')->name('financeiro');
				Route::get('/produtos', 'TesteController@produtos')->name('produtos');
				Route::get('/', function(){
					return redirect()->route('admin.dashboard');
				});
			});
		});
	});
});*/

Route::group([
	'middleware' => [],
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'name' => 'admin.'
], function() {
    Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');
	Route::get('/financeiro','TesteController@financeiro')->name('financeiro');
	Route::get('/produtos', 'TesteController@produtos')->name('produtos');
	Route::get('/', function(){
		return redirect()->route('admin.dashboard');
	});
});

Route::get('login', function() {
    return 'login';
})->name('login');

Route::get('/redirect3', function() {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function() {
    return 'Hey hey hey';
})->name('url.name');

Route::view('/view','site.contact',['subtitle'=>'Antigos']);

// Route::get('/view', function () {
//     return view('welcome');
// });

Route::redirect('/redirect1','/redirect2');
// Route::get('/redirect1', function() {
//     return redirect('/redirect2');
// });

Route::get('/redirect2', function() {
    return 'redirect2';
});

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
