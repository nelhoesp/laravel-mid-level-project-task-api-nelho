<?php

namespace App\Filters;

class TaskFilter extends ApiFilter {
    protected $safeParms = [
        'title' => ['eq', 'like'],
        'description' => ['eq', 'like'],
        'status' => ['eq'],
        'priority' => ['eq'],
        'dueDate' => ['eq', 'lt', 'gt'],
    ];

    protected $columnMap = [
        'title' => 'title',
        'description' => 'description',
        'status' => 'status',
        'priority' => 'priority',
        'dueDate' => 'due_date',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}