<?php

require_once __DIR__ . '/../bootstrap/init.php';
$app_name = getenv('APP_NAME');

//Mod rewrite is on this server if true
//var_dump(in_array('mod_rewrite', apache_get_modules()));