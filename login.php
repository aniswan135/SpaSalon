<!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href = "/css/style.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    
    <div class = "container mt-5">
    <h3 class = "mb-4">Вход в личный кабинет</h3>
        <form action = "check.php" method = "post">
            <input type = "login" name = "login" placeholder = "Введите Логин" class = "form-control"><br>
            <input type = "password" name = "password" placeholder = "Введите Пароль" class = "form-control"><br>
            <button type = "submit" name = "submit" class = "btn btn-success">Войти</button>
        </form>
    </div>
    <?php require "blocks/footer.php"?>
</body>
</html>