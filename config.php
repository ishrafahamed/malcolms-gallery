<?php

define('WEBSITE_TITLE', "Malcolm's Gallery" );

//Root Paths
$path = str_replace('\\','/','http://' . $_SERVER['SERVER_NAME'] . __DIR__ . '/');
$path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);
define('ROOT', str_replace('app/core', 'public', $path));
define('ASSETS', str_replace('app/core', 'public/assets', $path));

