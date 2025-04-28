<?php
setcookie('theme', 'light', time() + (86400), "/"); // 86400 секунд = 1 день
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('theme', 'dark', time() + (86400), "/"); 
    print "Тема изменена на: dark";
} else {
    print "Текущая тема: " . ($_COOKIE['theme'] ?? 'Не установлена');
}
?>
<form method="post" action="">
    <input type="submit" value="Изменить на Dark">
</form>