<?php
session_start();

unset($_SESSION);
session_destroy();

header("Location: practica2_index.php");
?>