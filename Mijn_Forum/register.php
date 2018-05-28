<?php

include_once ("database.php");

session_start();
if(isset($_POST['registreren_btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {

    }else{
        die('wachtwoorden niet gelijk');
    }

    $password = md5($password);

    $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
    if(dbOpen()){

        if (dbQuery($query, array(":username" => $username, ":password" => $password,))) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            echo $_SESSION['username'];
            header('location: login.php');
        }
    }
}

?>

<html>

    <head>

        <body>

            <form method="post" name="register" action="register.php">
                <input type="text" name="username">
                <input type="text" name="password">
                <input type="text" name="password2">
                <input type="submit" name="registreren_btn" value="registreren">
            </form>

        </body>

    </head>

</html>


