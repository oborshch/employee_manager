<?php
return [
    'routes' => [
        [
            'name' => 'page#index',
            'url' => '/',
            'verb' => 'GET',
        ],
        [
            'name' => 'api#getEmployees',
            'url' => '/api/employees',
            'verb' => 'GET',
        ],
        [
            'name' => 'api#addEmployee',
            'url' => '/api/employees',
            'verb' => 'POST',
        ],
        [
            'name' => 'api#updateEmployee',
            'url' => '/api/employees/{id}',
            'verb' => 'PUT',
        ],
        [
            'name' => 'api#deleteEmployee',
            'url' => '/api/employees/{id}',
            'verb' => 'DELETE',
        ],
        [
            'name' => 'api#importExcel',
            'url' => '/api/employees/import',
            'verb' => 'POST',
        ],
        [
            'name' => 'api#exportExcel',
            'url' => '/api/employees/export',
            'verb' => 'GET',
        ],
        [
            'name' => 'api#filterEmployees',
            'url' => '/api/employees/filter',
            'verb' => 'POST',
        ],
        [
            'name' => 'api#sortEmployees',
            'url' => '/api/employees/sort',
            'verb' => 'POST',
        ],
    ],
];
