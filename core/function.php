<?php
function set_message($type,$message){

    $_SESSION['message']=[
        "type"=>$type,
        "text"=>$message
    ];

}


function show_message(){
    if(isset($_SESSION['message'])){
        $type=$_SESSION['message']['type'];
        $text=$_SESSION['message']['text'];
        echo "<div class='alert alert-$type'> $text</div>";
        unset($_SESSION['message']);
    }
}


function add_user($name,$email,$phone,$password){
    $conn=$GLOBALS['conn'];
    $sql = "INSERT INTO `users` (name,email,phone,password)VALUES('$name','$email','$phone','$password');";
   $res= mysqli_query($conn,$sql);
   return $res;



}


function user_login ($email,$password){
    $conn=$GLOBALS['conn'];
    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $res= mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        return mysqli_fetch_assoc($res);
    }
    else{
        return null;
    }
}