<?php

//register.php
if(isset($_POST)){ //check if form was submitted

    if(isset($_POST['name'])){ // if name exists in $_POST array and is not empty 
        $name = $_POST['name'];
    }else{
        $name = false;
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email = false;
    }
    if(isset($_POST['password'])){
        $password = $_POST['password'];
    }else{
        $password = false;
    }     

    //erros array
    $errors = array();


    //data validation before inserting into database
    if(!empty($name) && !is_numeric($name) && !preg_match("/[^a-zA-Z0-9]/", $name) && !empty($email) && !empty($password)){
        //echo "Form was submitted";
        $name_validation = true;
        $email_validation = true;
        $password_validation = true;
    }else{
        $name_validation = false;
        $errors['name'] = "The name field can't be empty or contain any special characters or numeric";
        $email_validation = false;
        $errors['email'] = "The email field can't be empty";
        $password_validation = false;
        $errors['password'] = "The password field can't be empty";
    }

                
    
    var_dump($_POST); //return the array of data sent to the server

}

