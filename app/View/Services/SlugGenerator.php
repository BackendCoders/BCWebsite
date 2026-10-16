<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SlugGenerator
{
    public static function unique(Model|string $model, string $value, ?Model $except = null, string $column = 'slug'): string
    {
        $instance = is_string($model) ? new $model : $model;
        $slug = Str::slug($value);
        $query = $instance->newQuery()->where($column, $slug);

        if ($except) {
            $query->whereKeyNot($except->getKey());
        }

        while ($query->exists()) {
            $slug = "{$slug}-".Str::random(4);
            $query = $instance->newQuery()->where($column, $slug);

            if ($except) {
                $query->whereKeyNot($except->getKey());
            }
        }

        return $slug;
    }
}
