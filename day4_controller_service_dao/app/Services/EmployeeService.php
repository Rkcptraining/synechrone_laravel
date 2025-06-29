<?php

namespace App\Services;
 use App\DAO\EmployeeDAO;

class EmployeeService
{
    /**
     * Create a new class instance.
     */
    
    protected $employeeDAO;
    public function __construct(EmployeeDAO $employeeDAO)
    {
        $this->employeeDAO = $employeeDAO;
    }
  
    public function registerEmployee(array $data)
    {
        return  $this->employeeDAO->saveEmployee($data);
    }
    public function getAllEmployees()
    {
        return $this->employeeDAO->getAllEmployees();
    }
    public function getEmployeeById($id)
    {
        return $this->employeeDAO->getEmployeeById($id);
    }
    public function updateEmployee($id, array $data)
    {
        return $this->employeeDAO->updateEmployee($id, $data);
    }
    public function deleteEmployee($id)
    {
        return $this->employeeDAO->deleteEmployee($id);
    }
    public function loginEmployee(array $data)
    {
        // Logic for employee login
        // This is a placeholder implementation
        $data = $this->employeeDAO->loginEmployee($data);
        return $data; // Return the data for now
    }
    public function logout()
    {
        // Logic for employee logout
        // This is a placeholder implementation
        return true; // Return true for now
    }
}
