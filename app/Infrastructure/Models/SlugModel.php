<?php

namespace Infrastructure\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

abstract class SlugModel extends Model
{
    use HasSlug;

    protected $slugFromColumn = 'name';

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom($this->slugFromColumn)
            ->saveSlugsTo('slug');
    }

    public function scopeSlug(Builder $query, $slug): Builder
    {
        return $query->where('slug', $slug);
    }
}
