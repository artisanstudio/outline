<?php

namespace Artisan\Outline\Components;

use Illuminate\Support\ViewErrorBag;
use Spatie\BladeX\ViewModel;

class Field extends ViewModel
{
    /**
     * The error from the session if there is one.
     *
     * @var string
     */
    public $error;

    /**
     * The value to present.
     *
     * @param string
     */
    public $value;

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string  $value
     * @return Field
     */
    public function __construct($name, $value = null)
    {
        $this->value = old($name, $value);
        $this->error = $this->error($name);
    }

    /**
     * Get the first error if there is one.
     *
     * @param  string  $name
     * @return string
     */
    protected function error($name)
    {
        $errors = $this->errors();

        if (! $errors->has($name)) {
            return null;
        }

        return $errors->get($name)[0];
    }

    /**
     * Get the errors from the session and fall back to an empty error bag.
     *
     * @return ViewErrorBag
     */
    protected function errors()
    {
        return session()->get(
            'errors',
            app(ViewErrorBag::class)
        );
    }
}
