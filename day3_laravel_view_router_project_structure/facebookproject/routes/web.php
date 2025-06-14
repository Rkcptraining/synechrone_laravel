<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function () {

    $data = request()->all();

    // Handle the form submission
    $name = request('name');
    $email = request('email');
   
   /* return view('signup', [
        'name' => $name,
        'email' => $email
    ]);*/
    return view('signup', compact('data'));
});