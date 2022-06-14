<?php

    session_start();

    //Data

    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $nationality = $_POST['nation'];
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];

    //password regex
    $password_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    var_dump($_POST);
    //Validation

    // if(empty($fname) || empty($password) || empty($email) || empty($phone) || empty($lname) || empty($nationality) || empty($gender)){
    //     header("Location: auth.php?error=All%fields%are%required");
    //     exit();
    // }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     header("Location: auth.php?error=invalid%email");
    //     exit();
    // }else if(!preg_match($password_regex, $password)){
    //     header("Location: auth.php?error=Please%enter%a%strong%password");
    //     exit();
    // }else {
    //     $usersTable = new Table("users");

    //     //Check if username exists
    //     $username_exists = $usersTable->getOne("username", "username = '$username'");
    //     if($username_exists){
    //         header("Location: auth.php?error=Username%already%exists");
    //         exit();
    //     }else {
    //         //chek if email exits
    //         $email_exists = $usersTable->getOne("email", "email = '$email'");
    //         if($email_exists){
    //             header("Location: auth.php?error=Email%already%exists");
    //             exit();
    //         }else {
    //             //Insert user
    //             $newPassword = hash("md5", $password);

    //             $colums = ["firstName", "lastName", "email", "telephone", "gender","nationality", "username","email","password"];
    //             $values = [$fname,$lname,$email,$phone,$gender,$nationality,$username,$email,$newPassword];

    //             $newUser = $usersTable->insert($colums,$values);
    //             if($newUser){
    //                 $_SESSION['user_email'] = $email;
    //                 setcookie("stock_user", $email, time() + 2 * 24 * 60 * 60);
    //                 header("Location: ../index.php");
    //             }
     
    //         }
    //     }
    // }
?>