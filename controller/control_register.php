<?php

if($_SERVER['REQUEST_METHOD']=="POST") {

    $name=trim($_POST['name']);
    $email=trim($_POST['email']);
    $phone=trim($_POST['phone']);
    $phone=clean_phone($phone);
    $password=trim($_POST['password']);
    $confirm_password=trim($_POST['confirm_password']);

    echo $name ."<br>";
    echo $email ."<br>";
    echo $password ."<br>";
    echo $confirm_password ."<br>";
    echo $phone ."<br>";

   $eror=validate_user($name,$email,$phone,$password,$confirm_password);
if ($eror) {
   set_message("danger",$eror);
   header("location:index.php?page=register");
   exit;
}


$res=add_user($name,$email,$phone,$password);
if($res){
   
    header("location:index.php?page=login");
    exit;

}




}