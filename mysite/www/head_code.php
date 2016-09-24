<!DOCTYPE html> <!--html настройки, для корректного отображения-->
<html>
<head>
    <title>Верстка</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href = "css/reset_EM_used.css" rel = "stylesheet" media = "screen" />
    <link href = "fonts/fontello/CSS/fontello.css" rel = "stylesheet" media = "screen" />
    <link href = "css/styles.css" rel = "stylesheet" media = "screen" />
</head>

<body>
<div id = "bg">
    <div id = "main">
        <div id = "border">
            <div id = "header">
                <div id = "registration">
                   <form action="" method="post"> <!--Окошко регистрации-->
                        Введите имя
                        <br/>
                        <input type="text" name = "username" maxlength="20" size="25" placeholder="Логин" />
                        <br/>
                        <input type="checkbox" name = "remember" /> Запомнить меня
                        <br/>
                        <input type="submit" value="Вход" />
                    </form>
                </div>
               <h1>ЛОГОТИП</h1> <!--Тут доолжен быть логотип или название бренда-->
                <ul class = "menu">
                    <li><a href = "contacts.php" target = "_blank" >Контакты</a></li>
                    <li><a href = "about_us.php" target = "_blank" >О нас</a></li>
                    <li><a href = "galery.php">Галерея</a></li>
                    <li><a href = "production.php">Продукция</a></li>
                    <li><a href = "index.php">Главная</a></li>
                </ul>
            </div>
</div>