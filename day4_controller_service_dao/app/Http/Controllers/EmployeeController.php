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
        $employees = $this->employeeService->getAllEmployees();
        return view('dashboard', compact('employees'));
    }
    public function updateEmployee1(Request $request, $id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('editEmployee', compact('employee'));
    }
    public function deleteEmployee($id)
    {
        $this->employeeService->deleteEmployee($id);
        $employees = $this->employeeService->getAllEmployees();
        return view('dashboard', compact('employees'));
    }
    public function home()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function loginEmployee(Request $request)
    {
        // Logic for handling login
        // For example, validate credentials and redirect to dashboard
       $credentials = $this->employeeService->loginEmployee($request->all());
        //$credentials = $request->only('email', 'password');
        
        // Assuming you have a method to authenticate the user
        if ($credentials) {
            $employees = $this->employeeService->getAllEmployees();
            return view('dashboard', compact('employees'));
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function dashboard()
    {
        // Logic for displaying the dashboard
        return view('dashboard');
    }
   
    public function deleteEmployees()
    {
        return view('deleteEmployees');
    }
    public function viewEmployee($id)
    {
        $employee = $this->employeeService->getEmployeeById($id);
        return view('viewEmployee', compact('employee'));
    }
   
}
