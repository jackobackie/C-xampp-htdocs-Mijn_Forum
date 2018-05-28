<?php

if(isset($_POST["topicSubmitBtn"])){
    $topicTitel = $_POST['topicTitel'];
    $topicContent = $_POST['topicContent'];

    $query = "INSERT INTO topics (title, content) VALUES ('$topicTitel', '$topicContent')";
    if(dbOpen()){
        if (dbQuery($query, array(":topicTitel" => $topicTitel, ":topicContent" => $topicContent))){
            echo "successfully created topic";
        } else {
            echo "failed to create topic";
        }
    }
}

          if (dbOpen()){
            if (dbQuery("SELECT * FROM topics"))
              $resultaten = dbGetAll();
          }


?>