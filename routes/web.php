<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskAddController;
use App\Models\AddTask;

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
// Route::get("/test", function(){
//    $balance =  AddTask::where('id', 1)->first()->balance;
//    $balance = AddTask::where('id',1)->update(['balance'=>$balance+5]);
// });
Route::post('/addData',[TaskAddController::class,'addTask'])->name('addData');
