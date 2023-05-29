<?php
session_start();

session_unset(); //pulisco la sessione

session_destroy(); //finisco la sessione

header("location:../hw1.php");
die();
?>