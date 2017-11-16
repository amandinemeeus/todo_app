<?php

require 'config.php';
require 'connexion.php';

	// $response = $database->query("SELECT * FROM task");
	// $response = $response->fetchAll();
	// echo json_encode($response);

if( isset( $_POST['getAllTask'] ) ){
    $q = "SELECT * FROM task";
    $q = $database->query($q);
    $q->execute();
    $result = $q->fetchAll();
    echo json_encode($result);
}

if( isset( $_POST['getTask'] ) ){
    $id = $_POST['getTask'];
    $q = "SELECT * FROM task WHERE task_id = :id";
    $q = $database->prepare($q);
    $q->bindParam(':id', $id, PDO::PARAM_INT);
    $q->execute();
    $result = $q->fetch();
    echo json_encode($result);
}

?>

<form method="post">
    <input type="submit" name="getTask" value="1">
</form>
