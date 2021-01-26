<?php

require './Mind.php';

$conf = array(
    'host'      =>  'localhost',
    'dbname'    =>  'mydb',
    'username'  =>  'root',
    'password'  =>  ''
);

$Mind = new Mind($conf);

/* -------------------------------------------------------------------------- */
/*                                 INDEX PAGE                                 */
/* -------------------------------------------------------------------------- */
$Mind->route('/', 'app/views/index');

/* -------------------------------------------------------------------------- */
/*                                    POST                                    */
/* -------------------------------------------------------------------------- */
$Mind->route('file', 'app/views/file');
$Mind->route('files', 'app/views/files');
$Mind->route('multi', 'app/views/multi');
$Mind->route('api/form', 'app/api/form');

/* -------------------------------------------------------------------------- */
/*                                     GET                                    */
/* -------------------------------------------------------------------------- */
$Mind->route('get', 'app/views/get');
$Mind->route('api/get', 'app/api/get');
