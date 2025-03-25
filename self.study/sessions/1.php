<?php
session_start();
$_SESSION['username'] = 'student';
if (isset($_SESSION['username'])) {
    print  "Имя пользователя: " . $_SESSION['username'];
} else {
    print "Переменная сессии не установлена.";
}