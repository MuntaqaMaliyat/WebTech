<?php
session_start();

session_destroy();

header("Location: ../views/php/logIn.php");
exit;
?>