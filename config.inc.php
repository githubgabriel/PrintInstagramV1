<?php

session_start();
if(!isset($_SESSION["hashtag"]) or $_SESSION["hashtag"] == "") {
    $_SESSION["hashtag"] = "09990234";
}

define("CLIENTE_ID", "1d12369666f64e0b90a6ac9364a02bd9");
define("SECRET_ID", "0a010ca1c774483c98a7f5b46ab8a97a");
define("COUNT_IMAGE_POR_SCRIPT", 20);

include "class/connect.class.php";
include "class/printInstagramv1.class.php";


?>