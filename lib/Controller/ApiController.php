<?php
namespace OCA\EmployeeManager\Controller;

use OCP\AppFramework\ApiController;
use OCP\IRequest;

class ApiController extends ApiController {
    private $employeeService;

    public function __construct(IRequest $request, $employeeService) {
        parent::__construct('employee_manager', $request);
        $this->employeeService = $employeeService;
    }

    public function getEmployees() {
        return $this->employeeService->getAll();
    }

    public function addEmployee($data) {
        return $this->employeeService->add($data);
    }

    public function updateEmployee($id, $data) {
        return $this->employeeService->update($id, $data);
    }

    public function deleteEmployee($id) {
        return $this->employeeService->delete($id);
    }

    public function importExcel($file) {
        return $this->employeeService->import($file);
    }

    public function exportExcel() {
        return $this->employeeService->export();
    }

    public function filterEmployees($filters) {
        return $this->employeeService->filter($filters);
    }

    public function sortEmployees($sortParams) {
        return $this->employeeService->sort($sortParams);
    }
}