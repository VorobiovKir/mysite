<?php
function Login($username, $remember){
    if (trim($username) == '')
        return false;
    $_SESSION['username'] = $username;
    if ($remember)
        setcookie('username', $username, time() + 3600*24*7);
    return true;
}

function Logout(){
    setcookie('username', '', time() - 1);
    unset($_SESSION['username']);
}

//Точка входа - начало исполняемого кода
session_start();
$enter_site = false;
Logout();

if (count($_POST) > 0)
    $enter_site = Login($_POST['username'], $_POST['remember' == 'on']);
if ($enter_site) {
    header("Location: php_lessons_windows/new_window.php");
    exit();
}
?>