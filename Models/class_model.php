<?php

function class_get_data() {
    $query = "select * from class";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}

function add_new_class($data) {
    include "connection.php";
    $class = $_POST['class_title'];

    $query = "INSERT INTO class(title)
                VALUES('$class')";
    $result = mysqli_query($connection, $query);

    return $result;
}

function delete_class() {
    include "connection.php";
    $id = $_GET['id'];
    $result = mysqli_query($connection, "DELETE FROM class WHERE id= $id");

    return $result;
}

function class_details() {
    $id = $_GET['id'];
    $query =  "SELECT * FROM class WHERE id = $id";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    
    return $result;
}