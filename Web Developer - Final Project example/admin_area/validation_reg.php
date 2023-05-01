<?php
    $name = filter_input(INPUT_POST, "name");
    $surename = filter_input(INPUT_POST, "surename");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    if ( empty($email)){
        $email_error = "Please enter Email";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        @$email_error = "Enter correct email";
    }

    if (empty($name)){
        $name_error = "Please enter your name";
    }
    if (empty($surename)){
        $surename_error = "Please enter your surename";
    }elseif (strlen($surename) < 5){
        $surename_error = "Surename to short";
    }
    if (empty($password)){
        $password_error = "Please enter password";
    }

    if(empty($email_error) && empty($password_error)){


        include("../html/welcome.html");
        }
    else{
        include ("../index.php");
        }
?>