<?php

Route::get('/', 'UploadController@formularioDocumento');

Route::post('/register', 'UploadController@upload');
