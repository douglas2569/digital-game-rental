<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/digital-game-rental/config/config.php';

unset($_SESSION['hash']);
unset($_SESSION['name']);
unset($_SESSION['type']);

header("Location: view/login.php"); 