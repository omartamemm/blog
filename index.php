<?php
session_start();



include "config.php";
include "views/layout/header&nav.php";
require_once "config/db.php";
require_once "core/function.php";

require_once "core/validation.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


show_message();


switch ($page) {
    case 'home':
        include "./views/home.php";

        break;
    case 'register':
        include "./views/auth/register.php";

        break;
    case 'sign_in':
        include "./controller/control_register.php";

        break;
    case 'profile':
        include "./views/profile.php";

        break;

    case 'logout':
        include "./views/auth/logout.php";

        break;


        case 'login':
            include "./views/auth/login.php";
    
            break;

        case 'control_login':
            include "./controller/control_login.php";
    
            break;

            case 'add_post':
                include "./views/create_post.php";
        
                break;
                 



    default:
    include "./views/maintenance.php";

        # code...
        break;
}









include "views/layout/footer.php";


?>