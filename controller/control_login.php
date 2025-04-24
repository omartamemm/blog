<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $login_email = trim($_POST['login_email']);
    $login_password = trim($_POST['login_password']);



    $eror = validate_login($login_email, $login_password);
    if ($eror) {
        set_message("danger", $eror);
        header("location:index.php?page=login");
        exit;
    }



    $res = user_login($login_email, $login_password);
  
     if(is_array($res)) {
        var_dump($res);
        header("location:index.php?page=profile");
        exit;

        
        
     }
   


     
}


