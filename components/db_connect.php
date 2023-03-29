<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'restaurant');

$connect = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

$sql = "SELECT * FROM dishes LIMIT 3";
$resault = $connect->query($sql);
$rows = $resault->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
echo var_dump($rows);
echo "</pre>";