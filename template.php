<!doctype html>
<html>
    <head>
        <title><?=$title?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="container">
            <div id="header">
                <ul id="menu">
                    <li><a href="allpages.php">Страницы</a></li>
                    <li><a href="create_update.php">Создать</a></li>

                    <?php if(isset($pageid)):?>
                        <li><a href="create_update.php?id=<?=$pageid?>">Редактировать</a></li>
                        <li><a href="delete.php?id=<?=$pageid?>">Удаление</a></li>
                    <?php endif;?>

                    <li><a href="#">Главная</a></li>
                    <li><a href="logout.php">Выйти</a></li>
                </ul>
            </div>
            <div id="left">
                <form method="POST" action="auth.php">
                    <label>Логин</label>
                    <input type="text" name="login">
                    
                    <label>Пароль</label>
                    <input type="password" name="password">
                  
                    <label></label>
                    <button type="submit">Войти</button> 
                    <a href="signup.php">Регистрация</a>
                </form>
            </div>
            <div id="right">
                <h1><?php echo $title; ?></h1>
                <?php echo $content;?>
            </div>
            <div id="footer">Копирайт</div>
        </div>
        
    </body>
</html>