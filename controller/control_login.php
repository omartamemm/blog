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
  
     if($res) {
        var_dump($res)."<hr>";
        $_SESSION['user_name']=$res['name'];
        $_SESSION['user_id']=$res['id'];
        
         set_message("success", "successfully login");
         header("location:index.php");
         exit;

        

        
        
     }else {
        set_message("danger", "invalid email or password");
         header("location:index.php?page=login");
         exit;
        
     }
   


     
}


