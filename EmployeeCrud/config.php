<?php
define('DB_SEVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'employeecrud');

$link = mysqli_connect(DB_SEVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: Could not connect" .mysqli_connect_error());
}

?>