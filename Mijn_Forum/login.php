<?php
include_once ("database.php");
include_once ("login-handler.php");



?>


<html>

    <head>

        <body>

            <form method="post" name="login" action="login.php">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="login" value="inloggen">
            </form>

        </body>

    </head>

</html>