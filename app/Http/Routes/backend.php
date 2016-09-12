<?php
Route::get('/index', [
    'as'   => 'backend.index.index',
    'uses' => 'IndexController@index',
]);