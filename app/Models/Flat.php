<?php

namespace App\Models;

use App\Utilities\FilterBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Flat extends Model
{
    use HasFactory;

    /**
     * scope for filtering by params
     */
    public function scopeFilterBy(Builder $query, array $filters): Builder
    {
        $namespace = 'App\Utilities\FlatFilters';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
}
