<?php

namespace Artisan\Outline\Tests\Feature;

use Artisan\Outline\Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test **/
    function show_the_login_form()
    {
        $this->get('/cp/login')->assertSuccessful();
    }

    /** @test **/
    function login_and_redirect_to_the_dashboard()
    {
        $this->post('/cp/login', [
            'email' => 'jaggy@artisan.studio',
            'password' => 'password'
        ])->assertRedirect('/cp/dashboard');
    }
}
