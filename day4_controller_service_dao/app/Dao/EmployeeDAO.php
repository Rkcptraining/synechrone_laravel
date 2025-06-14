<?php

namespace App\Dao;
use App\Models\Employee;

class EmployeeDAO
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function saveEmployee(array $data)
    {
        //insert into employees (name, email, phone, address) values (?, ?, ?, ?);
        Employee::create($data);
        //select * from employees;
        // Fetch all employees from the database
        $employees = getAllEmployees();

        // Logic to save employee data to the database
        // This is a placeholder implementation
        //insert into employees values (name, email, phone, address);
        return $employees;
    }
    public function getAllEmployees()
    {
        // Fetch all employees from the database
        return Employee::all();
    }
    public function getEmployeeById($id)
    {
        // Fetch a single employee by ID
        return Employee::find($id);
    }
    public function updateEmployee($id, array $data)
    {
        // Update an existing employee
        $employee = Employee::find($id);
        if ($employee) {
            $employee->update($data);
            return $employee;
        }
        return null; // or throw an exception
    }
    public function deleteEmployee($id)
    {
        // Delete an employee by ID
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return true;
        }
        return false; // or throw an exception
    }
    public function loginEmployee(array $data)
    {
        // Logic for employee login
        // This is a placeholder implementation
        // You can implement actual authentication logic here
        $employee = Employee::where('email', $data['email'])
                            ->where('password', $data['password'])
                            ->first();
        if ($employee) {
        return true; // Return true if login is successful
        } else {
            return false; // Return false if login fails
        }
    }
    public function logout()
    {
        // Logic for employee logout
        // This is a placeholder implementation
        return true; // Return true for now
    }
}
