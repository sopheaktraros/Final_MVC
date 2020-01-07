<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'list_class';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}

function list_class(&$data){
    $data['class_data'] = class_get_data();
    $data['page'] = "classes/view";
}

function add_form(&$data){
    $data['page'] = "classes/add_form";
}

function form_data(&$data) {
    $add_data = add_new_class($_POST);
    if($add_data) {
        $action = "list_class";
    }else {
        $action = "add_form";
    }
    header("Location: index2.php?action=$action");
}

function delete(&$data) {
    //code here
    $result = delete_class();
    if($result) {
        $action = "list_class";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index2.php?action=$action");
}

function edit_form(&$data) {
    //code here
    $data['class'] = class_details();
    $data['page'] = "classes/edit";
}

function edit_subject(&$data) {
    //code here
    $update_subject = update_subject($_POST);
    if($update_subject) {
        $action = "list_subject";
    }else {
        $action = "edit_form";
    }
    header("Location: index2.php?action=$action");
}
