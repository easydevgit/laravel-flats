<?php

namespace App\Utilities\FlatFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class Name extends QueryFilter implements FilterContract
{

    public function handle($value): void
    {
        $this->query->where('name', 'like', '%' . $value . '%');
    }
}
