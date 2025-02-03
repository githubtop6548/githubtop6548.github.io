<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("user") or die(mysql_error());

$name     = $_POST['reg-name'];
$email    = $_POST['reg-email'];
$password = $_POST['reg-password'];

if (empty($name) || empty($email) || empty($password)) {
    echo "Все поля обязательны для заполнения.";
} else {
    $res = mysql_query(
        "SELECT * " .
        "FROM `users` " . 
        "WHERE `name` = '" . mysql_real_escape_string($name) . "' AND `email` = '" . mysql_real_escape_string($email) . "'"
    ) or die(mysql_error());
    
    $user = mysql_fetch_assoc($res);
    mysql_free_result($res);

    if ($user) {
        echo "Пользователь уже зарегистрирован";
    } else {
        $passwordHash = hash('sha512', $password);
        mysql_query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$passwordHash')")
            or die(mysql_error());
        echo "Регистрация прошла успешно!";
    }
}
?>
