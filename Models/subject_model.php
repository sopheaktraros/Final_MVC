<?php

function subject_get_data() {
    $query = "select * from subjects";
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

function subject_add_data($data) {
    include "connection.php";
    $subject = $_POST['sub_title'];

    $query = "INSERT INTO subjects(sub_title)
                VALUES('$subject')";
    $result = mysqli_query($connection, $query);

    return $result;
}

function subject_detail() {
    $id = $_GET['id'];
    $query =  "SELECT * FROM subjects WHERE id = $id";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    
    return $result;
}

function update_subject($data) {
    include "connection.php";
    $id = $_GET['id'];
    $subject = $_POST['sub_title'];

    $query = "UPDATE subjects SET sub_title = '$subject' WHERE id = $id";

    $result = mysqli_query($connection, $query);
    return $result;
}

function delete_subject() {
    include "connection.php";
    $id = $_GET['id'];
    $result = mysqli_query($connection, "DELETE FROM subjects WHERE id= $id");

    return $result;
}