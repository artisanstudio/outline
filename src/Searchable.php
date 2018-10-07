<?php

namespace Artisan\Outline;

trait Searchable
{
    use \Laravel\Scout\Searchable;

    /**
     * Use the class name plus `_index` as the default index name.
     *
     * @return string
     */
    public function searchableAs()
    {
        return strtolower(class_basename(static::class)) . '_index';
    }

    /**
     * Use the static $search variable and map it with the actual values
     * for the indexed values.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return collect(static::$search)->mapWithKeys(function ($key) {
            return [$key => $this->getAttribute($key)];
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
