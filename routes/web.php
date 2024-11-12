<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

     $result =DB::table('categories')->get();
    return view('welcome',['categories'=>$result]);
});
Route::get('/product/{catid?}', function ($catid =null) {
    b:if(!$catid)
    {
        $result =DB::table('products')->get();
        return view('product',['products' =>$result]);


    }
    else
    {
        $result =DB::table('products')->where('cat_id',$catid)->get();
        return view('product',['products' =>$result]);

    }
});



Route::get('/category', function () {
    return view('category');
});
Route::get('/master', function () {
    return view('Layout.master');
});
