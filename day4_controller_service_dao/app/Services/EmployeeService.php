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
}
