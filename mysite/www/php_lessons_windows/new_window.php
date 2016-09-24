<?php
session_start();
if (isset($_SESSION['username']) && isset($_COOKIE['username']))
    $_SESSION['username'] = $_COOKIE['username'];
    $username = $_SESSION['username'];
if ($username == null){
    header("Location: ../index.php.php");
    exit();
}
?>
<p>Страница А</p>
<p>Переход</p>
<!--<form action="">-->
<!--    <input type="text" name = "username"/><br>-->
<!--    <input type="checkbox"/ > Запомнить меня-->
<!--</form>-->
<a href="../index.php">Выход</a>


