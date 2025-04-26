
<?php 
     echo"<h2>Your Posts</h2>";

if (isset($_SESSION['user_name'])) :

    $blog_res=get_blogs($_SESSION['user_id']);


?>


    <main class="container mt-4">

    <?php if($blog_res):  
        
        
        
       while ($row = mysqli_fetch_assoc($blog_res)) {

       
        echo"<div class='card post-card'>
            <div class='card-body'>
                <h5 class='card-title'>{$row['title']}</h5>
                <p class='card-text'>{$row['content']}</p>
                <button class='btn btn-warning'>Edit</button>
                <button class='btn btn-danger'>Delete</button>
            </div>
        </div>";
       }
        
        
        
        ?>

        



        

        
        
        <?php
    else: 
        echo " <h2>No posts yet</h2>";
    
    
    endif; ?>
          
        


        
        <!-- Add more posts as needed -->

            <a href="index.php?page=logout" class="btn btn-danger btn-sm mt-4">LOGOUT</a>
            <a href="index.php?page=create_blog" class="btn btn-success btn-sm mt-4">ADD POST</a>


    </main>



<?php 
else :
    header("location:index.php?page=login");
    exit;
endif;


?>

