<?php

require_once '_connect.php';

$pdo = new \PDO(DSN, USER, PASS);

$firstname  = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);




$query = 'INSERT INTO friends (firstname, lastname ) VALUES (:firstname, :clastname )';
$statement = $pdo->prepare($query);

$statement->firstname(':firstname', $title, \PDO::PARAM_STR);
$statement->lastname(':lastname', $content, \PDO::PARAM_STR);



$statement->execute();

