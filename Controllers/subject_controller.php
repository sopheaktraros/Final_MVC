<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'list_subject';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function list_subject(&$data){
    $data['subject_data'] = subject_get_data();
    $data['page'] = "subjects/view";
}

function add_form(&$data){
    $data['page'] = "subjects/add_form";
}

function form_data(&$data) {
    $add_data = subject_add_data($_POST);
    if($add_data) {
        $action = "list_subject";
    }else {
        $action = "add_form"; 
    }
    header("Location: index3.php?action=$action");
}

function delete(&$data) {
    //code here
    $result = delete_subject();
    if($result) {
        $action = "list_subject";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index3.php?action=$action");
}

function edit_form(&$data) {
    //code here
    $data['subject'] = subject_detail();
    $data['page'] = "subjects/edit";
}

function edit_subject(&$data) {
    //code here
    $update_subject = update_subject($_POST);
    if($update_subject) {
        $action = "list_subject";
    }else {
        $action = "edit_form";
    }
    header("Location: index3.php?action=$action");
}
