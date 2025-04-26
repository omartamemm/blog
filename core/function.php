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

function get_blogs($id){
    $conn=$GLOBALS['conn'];
    $sql = "SELECT * FROM `posts` WHERE users_id='$id';";
    $res= mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        return $res;
    }
    else{
        return null;
    }



}

function add_blog($title,$content,$image,$id){
    $conn=$GLOBALS['conn'];

    $file_name=$image['name'];

    $full_path=realpath(__DIR__."/../../assets/imgs/blogs")."/".$file_name;

    $realtive_path="/assets/imgs/blogs".$file_name;

    $m=move_uploaded_file($image['tmp_name'],$full_path);
    if (!$m) 
    {
      return "faild to uplod image";
    }
   
    $sql = "INSERT INTO `posts` (title,content,image,users_id) VALUES('$title','$content','$realtive_path','$id');";
    $res=mysqli_query($conn,$sql);

    if ($res) {
       return true;
    }else {
        return false;
    }


}



function get_all_blogs(){
    $conn=$GLOBALS['conn'];
    $sql = "SELECT name,title,content,create_at FROM `users` INNER JOIN `posts` ON(users.id=posts.users_id);";
    $res= mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        return $res;
    }
    else{
        return null;
    }



}