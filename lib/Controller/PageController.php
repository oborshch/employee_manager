<?php
namespace OCA\EmployeeManager\Controller;

use OCP\AppFramework\Controller;
use OCP\IRequest;

class PageController extends Controller {
    public function __construct(IRequest $request) {
        parent::__construct('employee_manager', $request);
    }

    public function index() {
        return new TemplateResponse('employee_manager', 'index');
    }
}