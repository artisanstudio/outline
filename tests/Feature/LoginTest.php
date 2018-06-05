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
}
