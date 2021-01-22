<?php

require './Mind.php';

$conf = array(
    'host'      =>  'localhost',
    'dbname'    =>  'mydb',
    'username'  =>  'root',
    'password'  =>  ''
);

$Mind = new Mind($conf);

$Mind->route('/', 'app/views/index');
$Mind->route('file', 'app/views/file');
$Mind->route('files', 'app/views/files');
$Mind->route('multi', 'app/views/multi');
$Mind->route('api/form', 'app/api/form');
