<?php
session_start();


include "config.php";
include "views/layout/header&nav.php";
require_once "config/db.php";
require_once "core/function.php";

require_once "core/validation.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';





switch ($page) {
    case 'home':
        include "./views/home.php";

        break;
    case 'register':
        include "./views/auth/register.php";

        break;


    default:
        # code...
        break;
}









include "views/layout/footer.php";


?>