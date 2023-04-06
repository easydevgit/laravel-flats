<?php

namespace App\Utilities;

use Illuminate\Database\Eloquent\Builder;

class FilterBuilder
{
    protected Builder $query;
    protected array $filters;
    protected string $namespace;

    public function __construct(Builder $query, array $filters, string $namespace)
    {
        $this->query = $query;
        $this->filters = $filters;
        $this->namespace = $namespace;
    }

    public function apply(): Builder
    {
        foreach ($this->filters as $name => $value) {
            $normalizedName = str_replace('_', ' ', strtolower($name));
            $normalizedName = ucwords($normalizedName);
            $normalizedName = str_replace(' ', '', $normalizedName);

            $class = $this->namespace . "\\{$normalizedName}";

            if (!class_exists($class)) {
                continue;
            }

            if (strlen($value)) {
                (new $class($this->query))->handle($value);
            } else {
                (new $class($this->query))->handle();
            }
        }

        return $this->query;
    }
}
