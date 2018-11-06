<?php

namespace Artisan\Outline;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable as ScoutSearchable;

trait Searchable
{
    use ScoutSearchable;

    /**
     * Use the class name plus `_index` as the default index name.
     *
     * @return string
     */
    public function searchableAs()
    {
        return str_replace(
            '\\', '', Str::snake(Str::plural(class_basename($this)))
        );
    }

    /**
     * Use the static $search variable and map it with the actual values
     * for the indexed values.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return collect(static::$search)->mapWithKeys(function ($field, $alias) {
            if (is_numeric($alias)) {
                $alias = $field;
            }

            return [
                $alias => $this->getAttribute($field)
            ];
        })->toArray();
    }

    /**
     * The format of the preview on the global search.
     *
     * @return array
     */
    public function toSearchPreview()
    {
        return [];
    }
}
