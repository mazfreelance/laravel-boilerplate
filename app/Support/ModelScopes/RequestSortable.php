<?php

namespace App\Support\ModelScopes;

use Illuminate\Database\Eloquent\Builder;

trait RequestSortable
{
    public function scopeSortable(Builder $query, ?string $sort = null, string $defaultColumn = 'created_at'): Builder
    {
        if ($sort) {
            $sortOptions = explode("|", $sort);

            foreach ($sortOptions as $sortOption) {
                [$column, $order] = explode(",", $sortOption);
                $query = $query->orderBy($column, $order);
            }

            return $query;
        }

        return $query->latest($defaultColumn);
    }
}
