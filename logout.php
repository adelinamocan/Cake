<?php
require 'conectare.php';
session_destroy();
header("Location: login.php");
?>
