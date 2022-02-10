<?php
session_start();
// inputs => update user data
#solutions 
// 1 -> recieve request => (method , data)
// [] , [ sdas , s sdadsa ,asd sad, asdas ]
if($_POST){
    // request => post
    // validation
    $errors = [];
    $success = [];
    if(empty($_POST['name'])){
        $errors['name'] = "<div class='alert alert-danger'> Enter Valid Name </div>";
    }

    if(empty($_POST['gender'])){
        $errors['gender'] = "<div class='alert alert-danger'> Enter Valid Gender </div>";
    }

    // if no validaiton errors
    if(empty($errors)){
        // update user data
        $_SESSION['user']->name = $_POST['name'];
        $_SESSION['user']->gender = $_POST['gender'];
        $success['updated'] = "<div class='alert alert-success'> Data Updated Successfully </div>";
    }



    // display error messages
    $_SESSION['errors'] = $errors;
    $_SESSION['success'] = $success;
    header('location:../profile.php');die;
}else{
    // request => get
    echo "Method Not Allowed";die;
}