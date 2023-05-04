<?php
require 'action.php';
session_destroy();
header("Location: login.php");
?>