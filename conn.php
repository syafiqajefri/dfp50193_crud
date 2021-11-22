<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; #Sepasang single quotes
$dbname = 'CRUD';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();