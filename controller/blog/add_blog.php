<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $image=$_FILES['image'];

   $eror= validate_blog($title,$content,$image);
   if (!empty($eror)) {
    set_message("danger",$eror);
    header("location:index.php?page=create_blog");
    exit;
 }

    

    

    

     $res = add_blog($title, $content,$image ,$_SESSION['user_id']);
     var_dump($res);

    // if ($res) {

    //     set_message("success", "blog added sucessfully ");
    //     header("location:index.php?page=profile");
    //     exit;
    // }

}