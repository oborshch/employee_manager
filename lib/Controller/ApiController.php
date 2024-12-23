<?php

declare(strict_types=1);

namespace OCA\EmployeeManager\Controller;

use OCP\AppFramework\Http;
use OCP\AppFramework\Http\Attribute\ApiRoute;
use OCP\AppFramework\Http\Attribute\NoAdminRequired;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\OCSController;

/**
 * @psalm-suppress UnusedClass
 */
class ApiController extends ApiController {
    private $employeeService;

    public function __construct(IRequest $request, $employeeService) {
        parent::__construct('employeemanager', $request);
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
