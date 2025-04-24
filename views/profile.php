
<?php 
if (isset($_SESSION['user_name'])) :

?>

    <main class="container mt-4">
        <h2>Your Posts</h2>
        <div class="card post-card">
            <div class="card-body">
                <h5 class="card-title">Post Title 1</h5>
                <p class="card-text">This is a brief description of your first post.</p>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
        
        <div class="card post-card">
            <div class="card-body">
                <h5 class="card-title">Post Title 2</h5>
                <p class="card-text">This is a brief description of your second post.</p>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
        
        <!-- Add more posts as needed -->

            <a href="index.php?page=logout" class="btn btn-danger btn-sm mt-4">LOGOUT</a>

    </main>



<?php endif;?>

<?php
header("location:index.php?page=login");
exit;
?>