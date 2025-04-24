<?php
if($_SERVER['REQUEST_METHOD']=="POST") {

    $login_email=trim($_POST['login_email']);
    $login_password=trim($_POST['login_password']);

   

    $eror=validate_login($login_email,$login_password);
if ($eror) {
   set_message("danger",$eror);
   header("location:index.php?page=login");
   exit;
}
// $res=login_user($email,$password);
// if($res){
//     $_SESSION['user_name']=$res['name'];
//     $_SESSION['user_email']=$res['email'];
//     header("location:index.php?page=profile");
//     exit;

// }

 }
// header("location:index.php?page=login");
// exit;
?>
