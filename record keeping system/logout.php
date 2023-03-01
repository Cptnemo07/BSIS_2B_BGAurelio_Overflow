<?php
require 'connect.php';
$_SESSION = [];
session_destroy();
header("Location: login.php");
?>