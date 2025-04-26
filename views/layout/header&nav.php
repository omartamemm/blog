<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Blog App</title>
</head>
<body>
    <header class="bg-primary text-white text-center py-8">
      
        <?php 
        if (isset($_SESSION['user_name'])) {
           echo" <p class='pt-3'> Welcome Mr/".$_SESSION['user_name']."</p>";
           echo " <h5>at</h5>";

           echo " <h5>Tamem Blog</h5>";


            
        }else{
            
            echo " <h5>Tamem Blog</h5>";


        }

        ?>
        
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">Login</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=register">Register</a>
                </li>




                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=profile">Profile</a>
                </li>

            </ul>
        </div>
    </nav>