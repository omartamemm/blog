<style>
    body {
        background-color: #f4f7fa;
    }

    .post-card {
        margin-bottom: 20px;
        border: none;
        border-radius: 10px;
        transition: transform 0.2s;
    }

    .post-card:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }



    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
    }

    .user-name {
        font-size: 0.9rem;
        color: #6c757d;
    }
</style>




<?php
echo "<h2>Your Posts</h2>";

if (isset($_SESSION['user_name'])):

    $blog_res = get_blogs($_SESSION['user_id']);


    ?>


    <main class="container mt-4">

        <?php if ($blog_res):



            while ($row = mysqli_fetch_assoc($blog_res)) {

                echo "
            <div class='card post-card p-4'>
     
             <div class='card-body'>
             <h6 class='user-name'>Created At :  {$row['created_at']}</h6>
                 <h5 class='card-title'>{$row['title']}</h5>
                 
                 <p class='card-text'>{$row['content']}</p>
             </div>
         </div>
            
            
            
            ";
            }



            ?>

            <?php
        else:
            echo " <h2>No posts yet</h2>";


        endif; ?>
        <!-- boutons -->
        <a href="index.php?page=logout" class="btn btn-danger btn-sm mt-4">LOGOUT</a>
        <a href="index.php?page=create_blog" class="btn btn-success btn-sm mt-4">ADD POST</a>


    </main>



<?php
else:
    header("location:index.php?page=login");
    exit;
endif;


?>