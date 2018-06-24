<?php

require_once 'db_connect.php';

unset($_SESSION);
session_destroy();
session_start();

header("Location: login.php");
?>