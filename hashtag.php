<?php
require "config.inc.php";

$tagram = new printInstagramv1(CLIENTE_ID,SECRET_ID);
$tagram->set_hashtag($_SESSION["hashtag"]);
$tagram->set_count(COUNT_IMAGE_POR_SCRIPT);


/* SHOW HTML INFO .... */

$count = $tagram->get_json_count();
echo "<b>#".$tagram->get_hashtag()."</b>: <br> Total ".$count["data"]["media_count"]." fotos.";
echo "<br> <small> Qtd Fotos/Exec: ".$tagram->get_count()." fotos </small>";
echo "<br><br>";


$tagram->showImages_();

//$images_array = $tagram->get_json_imagens();
//$images = $tagram->show_images_data($images_array);
//echo $images;

//echo "<pre>";print_r($images_array);



/*
$contador=0;

function teste($next_url,$tag,$client_id)
{

    $url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id."&count=10";
    if(isset($next_url) and $next_url!="") {
        $url = $next_url;
    }

    $inst_stream = callInstagram($url);
    $results2 = json_decode($inst_stream, true);
    foreach($results2['data'] as $item){
        $GLOBALS["contador"]++;
        $image_link = $item['images']['low_resolution']["url"];
        echo '<img src="'.$image_link.'" />';
    }

    if($results2['pagination']["next_url"] != "") {
        teste($results2['pagination']["next_url"],$tag,$client_id);
    }

}

teste("",$tag,$client_id);

echo $contador;

*/