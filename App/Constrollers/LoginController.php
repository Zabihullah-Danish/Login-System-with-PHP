<?php
session_start();
require '../config/dbconnection.php';
require '../config/baseUrl.php';

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // echo "email: $email and passowrd: $password";
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);
    if($result){
        $_SESSION['name'];
        $_SESSION['email'];
        $path = baseUrl();
        header('location:'.$path);
    }else{
        // echo die("error");
        $path = baseUrl('auth/login.php?error=1');
        header('location:'.$path);
    }
    
}

if(isset($_POST['register-btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    //storing user info in session
    
    

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
    $query =  mysqli_query($conn,$sql);
    if($query){
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $path = baseUrl();
        header('location:'.$path);
    }
    
}


// class User{
//     public function login(){
        
//     }

//     public function register(){
        
//     }
// }
