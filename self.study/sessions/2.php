<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password']; 
    header('Location: welcome.php');
    exit();
}
?>
<form method="post" action="">
    Имя пользователя: <input type="text" name="username" required><br>
    Пароль: <input type="password" name="password" required><br>
    <input type="submit" value="Войти">
</form>