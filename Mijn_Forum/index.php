<?php

include_once("database.php");
include_once("topic-handler.php");

session_start();

?>


<html>
    <head>
        <body>
    <br>
    <br>
    Welkom <?php echo $_SESSION['username']; ?>
    <br>
    <br>
           <a href="logout-handler.php"> loguit </a>
    <br>
    <br>
            <form method="post">
                <input type="text" name="topicTitel" placeholder="Topic Name"/>
                <input type="text" name="topicContent" placeholder="Topic Content" />
                <input type="submit" name="topicSubmitBtn" placeholder="submit" />
            </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Content</th>
                    <th>Thread ID</th>
                    <th>User ID</th>
                    <th>Gemaakt op</th>
                    <th>Bewerkt op</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultaten as $resultaat): ?>
                <tr>
                    <td><?= $resultaat['id'] ?></td>
                    <td><?= $resultaat['title'] ?></td>
                    <td><?= $resultaat['content'] ?></td>
                    <td><?= $resultaat['thread_id'] ?></td>
                    <td><?= $resultaat['user_id'] ?></td>
                    <td><?= $resultaat['created_at'] ?></td>
                    <td><?= $resultaat['updated_at'] ?></td>
                </tr>
                <?php endforeach; ?>:
            </tbody>
        </table>
        </body>
    </head>
</html>
