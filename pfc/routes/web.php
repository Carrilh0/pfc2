<?php

Route::get('/', 'FileUploadController@cadastroDocumento');

Route::post('/register', 'FileUploadController@upload');
