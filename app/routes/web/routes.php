<?php


/*
* Front Website group
* Description: Please include only the file of each routes inside the routes/web folder
*
* example: routes/web/user.php this shoud include all the routes related to user for front website
*       always put comments of each included route file 
*
*/
Route::group(array('domain' => Config::get('app.domain')), function()
{

    Route::get('/', 'App\Controllers\Web\Home@index');    

});

//