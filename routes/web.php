<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);

// Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

// **************************** //

// Route::get('/', function() {
//     return redirect()->route('admin.clientes');
// });

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
// ], function () {
//     Route::get('dashboard', function() {
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('users', function() {
//         return "users";
//     })->name('users');
    
//     Route::get('clientes', function() {
//         return  "clientes";
//     })->name('clientes');
// });

// **************************** //

// Route::any('/any', function() {
//     return "Permite todo tipo de acesso http (put, delete, get, post)";
// });

// Route::match(['get', 'post'], '/match', function() {
//     return "Permite apenas acessos definidos";
// });

// Route::get('/produto/{id}/{cat?}', function($id, $cat = '') {
//     return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
// });

// Route::redirect('/sobre', '/empresa');
// Route::view('/empresa', 'site/empresa');

// Route::get('/timesnownews', function() {
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function() {
//     return redirect()->route('noticias');
// });