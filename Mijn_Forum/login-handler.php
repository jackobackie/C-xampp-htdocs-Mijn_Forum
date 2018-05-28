<?php

include_once ("database.php");

session_start();
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $password = md5($password);

  $query = "SELECT * FROM users WHERE username = :username AND password = :password";
  if(dbOpen()){

    if (dbQuery($query, array(":username" => $username, ":password" => $password))) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      echo $_SESSION['username'];
      header('location: index.php');
    }
  }
}

?>

