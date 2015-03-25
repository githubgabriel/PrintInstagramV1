<?php
include "class/connect.class.php";
include "class/printInstagramv1.class.php";


$tagram = new printInstagramv1("1d12369666f64e0b90a6ac9364a02bd9","0a010ca1c774483c98a7f5b46ab8a97a");
$imageR = $tagram->get_db_image_array_byId($_GET["id"]);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Template Image</title>
    <style>
        * { margin:0; padding: 0; }
        #container {
            width:300px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        #image { width: 100%; }
        #image img { width: 100%; }
        #info { width: 100%; margin-top: 10px;}

    </style>
</head>
<body>
    <div id="container">
        <div id="image"> <img src="<?=$imageR["imagem"]?>" /> </div>
        <div id="info"> HashTag: <b>#<?=$imageR["hashtag"]?></b> </div>
        <div id="info"> Username: <b><?=$imageR["usuario"]?></b> </div>
    </div>
</body>
</html>