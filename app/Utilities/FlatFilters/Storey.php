<?php

namespace App\Utilities\FlatFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class Storey extends QueryFilter implements FilterContract
{

    public function handle($value): void
    {
        $this->query->where('storey', $value);
    }
}
