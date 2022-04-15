<?php
if($_COOKIE['user1'] == 'Да') {
    setcookie("user1", "Да", time() - 3600, "/");
} elseif ($_COOKIE['user2'] == 'Да') {
    setcookie("user2", "Да", time() - 3600, "/");
} elseif ($_COOKIE['user3'] == 'Да') {
    setcookie("user3", "Да", time() - 3600, "/");
} else if ($_COOKIE['user4'] == 'Да') {
    setcookie("user4", "Да", time() - 3600, "/");
} elseif ($_COOKIE['user5'] == 'Да') {
    setcookie("user5", "Да", time() - 3600, "/");
} else {
    setcookie("user1", "Да", time() - 3600, "/");
    setcookie("user2", "Да", time() - 3600, "/");
    setcookie("user3", "Да", time() - 3600, "/");
    setcookie("user4", "Да", time() - 3600, "/");
    setcookie("user5", "Да", time() - 3600, "/");
}


    header("Location: /");
?>