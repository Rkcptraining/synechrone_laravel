<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
//parameterized routing
Route::get('/employee/{empid}', function ($empid) {
    //return view('welcome');

    return "welcome to laravel programing : Employee ID is " . $empid;
   
});
*/
Route::get('/hello', function () {
   

    return view('hello'); 
   
});
//optional routing parameter
/*Route::get('/employee/{empid}/{empname?}', function ($empid, $empname = 'Visitor') {
  
    return "welcome to laravel programing : Employee ID is " . $empid  . " and Employee Name is " . $empname;
   
});*/

Route::get('/employee/{empid}/{empname}', function ($empid , $empname) {
   
   // return "welcome to laravel programing : Employee ID is " . $empid  . " and Employee Name is " . $empname;
   return view('employee', ['empid1' => $empid, 'empname1' => $empname]);
})->where('empname', '[A-Za-z]+' , 'empid', '[0-9]+') ; //only accept numbers

Route::get('/signup',  [EmployeeController::class, 'displaysignuppage']);

Route::post('/signup', [ EmployeeController::class, 'createEmployee']);
Route::get('/getAllEmployees', [EmployeeController::class, 'getAllEmployees']);
Route::get('/getEmployeeById/{id}', [EmployeeController::class, 'getEmployeeById']);
Route::get('/edit/{id}', [EmployeeController::class, 'updateEmployee1']);
Route::delete('/deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);
Route::put('/updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);
Route::get('/home',[EmployeeController::class, 'home']);
Route::get('/login', [EmployeeController::class, 'login']);
Route::post('/login', [EmployeeController::class, 'loginEmployee']);
Route::get('/logout', [EmployeeController::class, 'logout']);
Route::get('/dashboard', [EmployeeController::class, 'dashboard']);
