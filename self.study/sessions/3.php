<?php
session_start(); 
if (isset($_SESSION['username'])) {
    echo "Добро пожаловать, " . $_SESSION['username'] . "!";
    echo "<br><a href='logout.php'>Выйти</a>";
} else {
    header('Location: login.php');
    exit();
}