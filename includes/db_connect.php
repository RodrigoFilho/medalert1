<?php
include_once 'psl-config.php';

$mysqli = new mysqli('localhost', 'root', '', 'medalert');
if ($mysqli->connect_error) {
    header("Location: ../error.php?err=Unable to connect to MySQL");
    exit();
}
