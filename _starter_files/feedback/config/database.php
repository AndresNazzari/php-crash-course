<?php

define('DB_HOST', 'localhost');
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "php_crash_course");

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
