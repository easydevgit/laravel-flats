<?php

namespace App\Utilities;

use Illuminate\Database\Eloquent\Builder;

abstract class QueryFilter
{
    protected Builder $query;

    public function __construct(Builder $query)
    {
        $this->query = $query;
    }
}
