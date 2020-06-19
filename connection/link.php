<?php

session_start();

require_once "config.php";
require_once "Database.php";

$conn = new Database(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$link = $conn->connect();