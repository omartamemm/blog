<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {



    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title=="" || $content=="") {
        set_message("danger","please write title and content");
        header("location:index.php?page=create_blog");
        exit;
    }

    $res = add_blog($title, $content, $_SESSION['user_id']);

    if ($res) {

        set_message("success", "blog added sucessfully ");
        header("location:index.php?page=profile");
        exit;
    }

}