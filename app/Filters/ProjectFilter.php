<?php

namespace App\Filters;

class ProjectFilter extends ApiFilter {
    protected $safeParms = [
        'name' => ['eq', 'like'],
        'description' => ['eq', 'like'],
        'status' => ['eq'],
    ];

    protected $columnMap = [
        'name' => 'name',
        'description' => 'description',
        'status' => 'status',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}