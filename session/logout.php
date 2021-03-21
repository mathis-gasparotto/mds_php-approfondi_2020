<?php 

include_once "layout/header.php";

unset($_SESSION['login']);

header("Location: index.php");
