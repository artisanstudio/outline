<?php

return [

    /**
     * The name that will be displayed in the admin sidebar.
     */
    'name' => config('app.name', 'Outline Admin'),

    /**
     * The prefix of the Outline routes.
     */
     'prefix' => 'admin',

    /**
     * The models to search.
     */
    'search' => [
    ],

    /**
     * Where the admin will go when they log out.
     */
    'logout_redirect' => '/',
];
