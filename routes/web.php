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

Route::get('/', function () {
    return view('welcome');
});


Route::get('products', function() {

	$allProducts = App\Models\Product::all();
	$ruleOne = new App\Models\RuleOne;
	$upSpeedLT100 = $ruleOne->RuleUploadSpeedLessThan(100)->get();
	$upSpeedLT100AndFiber = $ruleOne->RuleUploadSpeedLessThanAndTechnology(100, 'fiber')->get();

	$downSpeedLT100AndFiber = App\Models\RuleTwo::all();

	return view('products')->with([
						'allProducts'=>$allProducts,
						'upSpeedLT100'=>$upSpeedLT100,
						'upSpeedLT100AndFiber'=>$upSpeedLT100AndFiber,
						'downSpeedLT100AndFiber'=>$downSpeedLT100AndFiber,
					]);

});
