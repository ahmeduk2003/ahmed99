<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lib;
use App\Http\Controllers\Boys;
use App\Http\Controllers\Ahmed;
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
Route::get('/ahmed/{id}', function ($id) {
    return 'ahmed' . $id;
});
Route::get('/ali','ahmed@index');
Route:: get('/UK/{id}' , function($id){
return "hello word" . $id ;

});

use\Illuminate\Support\Facades\DB;
Route::get('php/',[App\Http\Controllers\Admin\ali::class,'Showme1']) ->middleware('auth');
Route::get('math/',[App\Http\Controllers\Admin\ali::class,'showme2']); 
Route::get('first/',[App\Http\Controllers\Admin\ali::class,'showme3']);
Route::post('login',function(){
 return 'you must be login';  
})->name('login');
Route::get('welcome/',[App\Http\Controllers\admin\ali::class,'Add']);
Route::get('Landing/',[App\Http\Controllers\admin\ali::class,'NewPage']);
Route::get('read/',[App\Http\Controllers\admin\ali::class,'read']);
Route::get('ReadDateBase/',[App\Http\Controllers\admin\ali::class,'ReadDateBase']);     //Insert2
Route::get('Find/',[App\Http\Controllers\admin\ali::class,'Find']);
//Route::get('Insert/',[App\Http\Controllers\admin\ali::class,'Insert']);
//Route::get('Insert2/',[App\Http\Controllers\admin\ali::class,'Insert2']);   
//Route::get('Update/',[App\Http\Controllers\admin\ali::class,'Update']); 
//Route::get('Insert5/',[App\Http\Controllers\admin\ali::class,'Insert5']); 
Route::get('Reading/',[App\Http\Controllers\admin\ali::class,'Reading']); 
Route::get('AR/',[App\Http\Controllers\admin\ali::class,'AR']); 
Route::get('Book/',[App\Http\Controllers\Lib::class,'Booker']); 
Route::get('Math/',[App\Http\Controllers\Lib::class,'Bookker']); 
Route::get('DesplayBook/',[App\Http\Controllers\Lib::class,'ASS']); 
Route::get('DisplayAddbook',[App\Http\Controllers\Lib::class,'DisplayAddbook']);
Route::get('DisplayAddbook',[App\Http\Controllers\Lib::class,'DisplayAddbook']);
Route::get('Addbook/',[App\Http\Controllers\Lib::class,'Adding']); 
//Route::view('add-student','school');
Route::post('add-student',  [App\Http\Controllers\Ahmed::class, 'store']);
Route::get('list',  [App\Http\Controllers\Ahmed::class, 'show']);
Route::get('delete',  [App\Http\Controllers\Ahmed::class, 'Remove']);
Route::get('add-student',  [App\Http\Controllers\Ahmed::class, 'create']);
Route::get('edit',  [App\Http\Controllers\Ahmed::class, 'Edit']);
Route::post('edit',  [App\Http\Controllers\Ahmed::class, 'update']);
//Route::get('edit/{id}', [App\Http\Controllers\Ahmed::class, 'edit']);
Route::post('update', [App\Http\Controllers\Ahmed::class, 'update']);