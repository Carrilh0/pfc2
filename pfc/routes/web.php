<?php

Route::get('/', 'UploadController@formularioDocumento');

Route::post('/register', 'UploadController@upload');

Route::get('/lista', 'UploadController@lista');
