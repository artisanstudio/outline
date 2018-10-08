<?php

Route::delete('signout', 'SessionController@destroy')->name('sessions.destroy');
Route::resource('search', 'SearchController');
