<?php

use App\Http\Controllers\SecuritiesController;
use App\Http\Requests\SecuritiesRequest;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
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


Route::get('seguridad/exportToXlsx', [SecuritiesController::class, 'exportToXlsx'])->name('seguridad/exportToXlsx');

Route::get('/', function () {
    return view('/layouts/inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('seguridad', [SecuritiesController::class, 'index'])->name('seguridad.index');

Route::get('seguridad/create', [SecuritiesController::class, 'create'])->name('seguridad.create');

Route::post('seguridad', [SecuritiesController::class, 'store'])->name('seguridad.store');

Route::get('seguridad/{security}', [SecuritiesController::class, 'show'])->name('seguridad.show');

Route::get('seguridad/{security}/edit', [SecuritiesController::class, 'edit'])->name('seguridad.edit');

//Route::get('seguridad/funcion', [SecuritiesController::class, 'funcion'])->name('seguridad.funcion');

Route::put('seguridad/{security}', [SecuritiesController::class, 'update'])->name('seguridad.update');

Route::delete('seguridad/{security}', [SecuritiesController::class, 'destroy'])->name('seguridad.destroy');

Route::match(['get', 'post'], 'seguridad.funcion', function (SecuritiesRequest $request) {
    $html = '';
    if ($request->input('elegido') == 1) {
        $html = '
    	<option value="1">4</option>
    	<option value="2">5</option>
    	<option value="3">7</option>
    	<option value="4">21</option>
    	<option value="5">Scennic</option>
    	<option value="6">Traffic</option>
    	';
    }
    if ($request->input('elegido')==2) {
        $html = '
    	<option value="1">Ibiza</option>
    	<option value="2">Toledo</option>
    	<option value="3">Cordoba</option>
    	<option value="4">Arosa</option>
    	';
    }
    if ($request->input('elegido') == 3) {
        $html = '
    	<option value="1">106</option>
    	<option value="2">206</option>
    	<option value="3">306</option>
    	';
    }
    echo  '<option value="1">106</option>';
});