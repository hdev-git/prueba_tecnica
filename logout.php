<?php
require 'script.php';

//terminando session
unset($_SESSION['user3']);
session_destroy();
header("location: index.php");
?>