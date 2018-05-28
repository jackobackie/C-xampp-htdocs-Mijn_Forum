<?php

global $conn;
global $dbStatement;

function dbOpen()
{
    global $conn;
    try {
        $conn = new PDO('mysql:host=localhost;dbname=forum',

            'root',
            '');
    }
    catch (PDOException $ex) {
        echo $ex->getMessage();
        die();
    }
    return true;
}

function dbQuery($sql, array $args = []){
    global $conn, $dbStatement;

    if ($conn) {
        try {
            $dbStatement = $conn->prepare($sql);
            $dbStatement->execute($args);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }
    return false;
}

function dbGet() {
    // retourneert het ene resultaat
    global $dbStatement;

    if ($dbStatement->rowCount() > 0) {
        return $dbStatement->fetch(PDO::FETCH_ASSOC);
    }
    return [];
}
function dbGetAll() {
    // retourneert alle resultaten
    global $dbStatement;

    if ($dbStatement) {
        return $dbStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return [];
}