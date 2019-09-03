<?php

$db = Database::getInstance();

function getUsers() {
    global $db;
    $stmt = $db->query('select * from users');
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr[] = $row;
    }
    if(!$arr) exit('No rows');
    return $arr;
}