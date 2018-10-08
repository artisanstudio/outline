<?php

namespace Artisan\Outline\Http\Controllers;

class SessionController
{
    /**
     * Sign the user out and redirect them out.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy()
    {
        auth()->logout();

        return redirect()->to(
            config('outline.logout_redirect')
        );
    }
}
