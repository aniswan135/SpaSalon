<?php

$username = $_POST['login'] ?? null;
$password = md5($_POST['password']) ?? null;

$users = [
     'user1' => ['id' => 'Даша', 'password' => 'c4ca4238a0b923820dcc509a6f75849b'], // пароль 1
     'user2' => ['id' => 'Катя', 'password' => 'c20ad4d76fe97759aa27a0c99bff6710'],    // пароль 12
     'user3' => ['id' => 'Аня', 'password' => '202cb962ac59075b964b07152d234b70'],    // пароль 123
     'user4' => ['id' => 'Анатолий', 'password' => '81dc9bdb52d04dc20036dbd8313ed055'],    // пароль 1234
     'user5' => ['id' => 'Люся', 'password' => '827ccb0eea8a706c4c34a16891f84e7b']     // пароль 12345
];

$psw = [];
foreach ($users as $admin => $inner_arr) {
	$psw[] = $inner_arr['password'];
}

$id = [];
foreach ($users as $admin => $inner_arr){
	$id[] = $inner_arr['id'];
}

if (null !== $username || null !== $password) {
    if ($password === $psw[0] && $username === $id[0] ) {
    session_start(); 
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $id[0]; 
        $_SESSION['login'] = $username;
        setcookie("user1", "Да", time() + 3600, "/");
    }
    }

if (null !== $username || null !== $password) {
    if ($password === $psw[1] && $username === $id[1] ) {
    session_start(); 
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $id[1]; 
        $_SESSION['login'] = $username;
        setcookie("user2", "Да", time() + 3600, "/");
    } 
    }

if (null !== $username || null !== $password) {
    if ($password === $psw[2] && $username === $id[2] ) {
    session_start(); 
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $id[2]; 
        $_SESSION['login'] = $username;
        setcookie("user3", "Да", time() + 3600, "/");
    } 
    }

if (null !== $username || null !== $password) {
    if ($password === $psw[3] && $username === $id[3] ) {
    session_start(); 
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $id[3]; 
        $_SESSION['login'] = $username;
        setcookie("user4", "Да", time() + 3600, "/");
    }
    }

if (null !== $username || null !== $password) {
    if ($password === $psw[4] && $username === $id[4] ) {
    session_start(); 
        $_SESSION['auth'] = true; 
        $_SESSION['id'] = $id[4]; 
        $_SESSION['login'] = $username;
        setcookie("user5", "Да", time() + 3600, "/");
    }
    }
  
$auth = $_SESSION['auth'] ?? null;

if ($auth) {
?>
    <?php
    $main_page = "index.php";
    header('Location: '.$main_page);
    ?>
<?php }

if(!$auth) {
    ?>
    <!DOCTYPE html>
<html lang = "ru">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href = "/css/style.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
    a {
        text-decoration: none;
    }
    </style>
    <div class = "container mt-5">
    <h3 class = "mb-4">Неправильно введен Логин или пароль</h3>
    <button type="button" class = "btn btn-success"><a href = "/login.php" style = "color: white">Попробовать снова</a></button>
    </div>
    <?php require "blocks/footer.php"?>
</body>
</html>
  <?php }

