<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmployeeService;

class EmployeeController extends Controller
{
    //how to use service layer into controller?
    //via dependency injection
    // we will achive dependency injection by using constructor

   
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }
   
    public function createEmployee(Request $request){
         $data =  $this->employeeService->registerEmployee($request->all());


    // Handle the form submission
    $name = request('name');
    $email = request('email');

    return view('signup', compact('data'));
    }
    public function displaysignuppage(){
        return view('signup');
    }
    public function getAllEmployees()
    {
        $employees = $this->employeeService->getAllEmployees();
        return view('getAllEmployees', compact('employees'));
    }
    public function getEmployeeById($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('viewEmployee', compact('employee'));
    }
    public function updateEmployee(Request $request, $id)
    {
        $data = $request->all();
        $employee = $this->employeeService->updateEmployee($id, $data);
        return view('getAllEmployees', compact('employee'));
    }
    public function deleteEmployee($id)
    {
        $this->employeeService->deleteEmployee($id);
        return view('deleteEmployees' , ['message' => 'Employee deleted successfully']);
    }
}
