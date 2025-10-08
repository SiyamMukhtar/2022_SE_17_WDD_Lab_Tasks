<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'student_mgmt';


$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
die('Database connection failed: ' . $mysqli->connect_error);
}


function e($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); }
?>