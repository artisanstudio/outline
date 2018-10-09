<?php

Route::delete('signout', 'SessionController@destroy')->name('sessions.destroy');
Route::resource('search', 'SearchController');

Route::get('kitchen-sink', function () {
    return view('outline::kitchen-sink');
});
