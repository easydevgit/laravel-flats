<?php

namespace App\Utilities;

interface FilterContract
{
    public function handle(float|int|string $value): void;
}
