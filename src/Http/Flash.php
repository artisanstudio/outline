<?php

namespace Artisan\Outline\Http;

use Illuminate\Support\Fluent;

class Flash
{
    const KEY = '_message';

    const WARNING = 'warn';

    const SUCCESS = 'success';

    const ERROR = 'error';

    public function get()
    {
        return session()->get(static::KEY);
    }

    public function warning($title, $message = null)
    {
        $this->send(static::WARNING, $title, $message);
    }

    public function success($title, $message = null)
    {
        $this->send(static::SUCCESS, $title, $message);
    }

    public function error($title, $message = null)
    {
        $this->send(static::ERROR, $title, $message);
    }

    private function send($type, $title, $message = null)
    {
        if (! $message) {
            [$title, $message] = [$message, $title];
        }

        session()->flash(static::KEY, new Fluent([
            'type'    => $type,
            'title'   => $title,
            'content' => $message,
        ]));
    }
}
