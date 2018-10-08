<?php

namespace Artisan\Outline\Http\Controllers;

class SessionController
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
