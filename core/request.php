<?php

require 'config.php';
require 'connexion.php';

    //MY RECIPE:
    // $response = $database->query("SELECT * FROM task");
	// $response = $response->fetchAll();
	// echo json_encode($response);

//GET ALL TASKS
if( isset( $_POST['getAllTask'] ) ){
    $response = "SELECT * FROM task";
    $response = $database->query($response);
    $response->execute();
    $result = $response->fetchAll();
    echo json_encode($result);
}

//GET TASK
if( isset( $_POST['getTask'] ) ){
    $id = $_POST['getTask'];
    $response = "SELECT * FROM task WHERE task_id = :id";
    $response = $database->prepare($response);
    $response->bindParam(':id', $id, PDO::PARAM_INT); //sécuriser le code: INT pour nombres ou STR pour caractères
    $response->execute();
    $result = $response->fetch(); //ou fetchAll
    echo json_encode($result);
}

//INSERT TASKS
if( isset($_POST['insertTask']) ){
    $task = $_POST['insertTask'];
    //I need to convert my JsonStr to array;
    $title = "My title";
    $description = "My description";
    //Assigner la date et l'heure à l'aide d'un timestamp Unix
    $startat = new DateTime();
    echo $date->getTimestamp();
    echo $date;
    $endat = $startat + (24+60+60+7); // 24 heures; 60 minutes; 60 secondes; 7 jours

    $response = "INSERT INTO task (
        task_title, task_description, task_start_at, task_end_at, task_ended_at)
        VALUES (:title, :description, :startat, :endat)";
    $response = $database->prepare($response);

    $response->bindParam(":title", $title, PDO::PARAM_STR);
    $response->bindParam(":description", $description, PDO::PARAM_STR);
    $response->bindParam(":startat", $startat, PDO::PARAM_STR);
    $response->bindParam(":endat", $endat, PDO::PARAM_STR);

    $response->execute();

    //retourner le nombre de lignes affectées par la dernière requête SQL
    if( $response->rowCount() > 0){
        echo true;
    }else{
        echo false;
    }
}

// UPDATE TASK
if( isset($_POST['updateTask']) ){
}

// SELECT TASK
if( isset($_POST['selectTask']) ){
    $task = $_POST['selectTask'];

    if($task == "*"){ // *
        //SELECT ALL TASK
    }else{ // 3
        //SELECT BY ID
    }
}

// DELETE TASK
if( isset($_POST['deleteTask']) ){
    $response = $database->prepare('DELETE FROM task
                                    WHERE task_id = :taskId');
    $response->bindParam(':taskId', $_POST['deleteTask']);
    $response->execute();
    echo $_POST['deleteTask'];

    // $task = $_POST['deleteTask'];
    //
    // if(is_array($task)){ //[2,5,6]
    //
    // }else{ //3
    //
    // }
}


// $task = getAllTask();
// echo json_encode($task);
// ?>
