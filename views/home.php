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

    .footer {
        background-color: #343a40;
        color: white;
        padding: 20px 0;
        position: relative;
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



<main class="container mt-4">
    <h2 class="mb-4">All Posts</h2>

    <?php 
    
    $all=get_all_blogs();
    while ($row = mysqli_fetch_assoc($all)) { 

       echo"
       <div class='card post-card p-4'>

        <div class='card-body'>
        <h6 class='user-name'>User Name :  {$row['name']}</h6>
        <h6 class='user-name'>Created At :  {$row['create_at']}</h6>
            <h5 class='card-title'>{$row['title']}</h5>
            
            <p class='card-text'>{$row['content']}</p>
        </div>
    </div>
       
       
       
       ";
    }

       
       
    
    
    ?>

    



</main>