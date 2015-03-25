<?
    require "config.inc.php";

    $tagram = new printInstagramv1(CLIENTE_ID,SECRET_ID);

    if($_GET["set_hashtag"] != "") {
        $_SESSION["hashtag"] = $_GET["set_hashtag"];

        $tagram->set_hashtag($_SESSION["hashtag"]);
        $count = $tagram->get_json_count();

        echo "Registros encontrados: ".$count["data"]["media_count"];

        die();
    }

    /* Recebe quantidade de reg da hashtag na sessao ... */
    $tagram->set_hashtag($_SESSION["hashtag"]);
    $count = $tagram->get_json_count();

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bem vindo ao Sistema InstagramPrint</title>

    <script src="js/jquery.min.js"></script>

    <style>
    * { margin: 0; padding: 0; }
    body { padding: 10px;}
        #menu a { margin:10px;font-size:30px; color: black; font-family: "Courier New", Courier, monospace; text-decoration:none;}
        #menu a:hover { color:blue; }

        #bemvindo #image { }
        #bemvindo #text { margin-left:20px;}
        .left { float:left; }
        .right { float:right; }

        #configure_hashtag {
            text-align: center;
            font-size:55px;
            font-weight: bold;
        }
        #configure_hashtag input[type=text] {
            padding:5px; font-size:35px;border: 1px solid lightgray;
        }
        #configure_hashtag #desc { font-size:12px; margin-top:9px;}
</style>

    <script>
        $(function() {

            $("input[name=set_hashtag]").change(function() {
                var hashtag = $("input[name=set_hashtag]").val();
                $.ajax({
                    type: 'GET',
                    url: 'index.php',
                    data: {
                        set_hashtag: hashtag
                    },beforeSend: function() {

                        $("#configure_hashtag #desc").html("Verificando quantidade de registros...");
                        $("#configure_hashtag #desc").css("color","gray");

                    },success: function(data) {
                        $("#configure_hashtag #desc").html(data);
                        $("#configure_hashtag #desc").css("color","green");
                    }
                });

            });

        });
    </script>

</head>
<body>

<div id="bemvindo">
    <div class="left" id="image">
<pre style="line-height: 10px;">
──────────────────────────────────
───────▄██████████████████▄───────
────▄███████████████████████▄─────
───███████████████████████████────
──█████████████████████████████───
─████████████▀─────────▀████████──
██████████▀───────────────▀██████─
███████▀────────────────────█████▌
██████───▄▀▀▀▀▄──────▄▀▀▀▀▄──█████
█████▀──────────────────▄▄▄───████
████────▄█████▄───────▄█▀▀▀█▄──██▀
████──▄█▀────▀██─────█▀────────█▀─
─▀██───────────▀────────▄███▄──██─
──██───▄▄██▀█▄──▀▄▄▄▀─▄██▄▀────███
▄███────▀▀▀▀▀──────────────▄▄──██▐
█▄▀█──▀▀▀▄▄▄▀▀───────▀▀▄▄▄▀────█▌▐
█▐─█────────────▄───▄──────────█▌▐
█▐─▀───────▐──▄▀─────▀▄──▌─────██▐
█─▀────────▌──▀▄─────▄▀──▐─────██▀
▀█─█──────▐─────▀▀▄▀▀─────▌────█──
─▀█▀───────▄────────────▄──────█──
───█─────▄▀──▄█████████▄─▀▄───▄█──
───█────█──▄██▀░░░░░░░▀██▄─█──█───
───█▄───▀▄──▀██▄█████▄██▀─▄▀─▄█───
────█▄────▀───▀▀▀▀──▀▀▀──▀──▄█────
─────█▄────────▄▀▀▀▀▀▄─────▄█─────
──────███▄──────────────▄▄██──────
─────▄█─▀█████▄▄────▄▄████▀█▄─────
────▄█───────▀▀██████▀▀─────█▄────
───▄█─────▄▀───────────▀▄────█▄───
──▄█─────▀───────────────▀────█▄──
──────────────────────────────────
▐▌▐█▄█▌▐▀▀█▐▀▀▌─█▀─█▀─▐▌▐▀█▐▀█─█─█
▐▌▐─▀─▌▐▀▀▀▐──▌─▀█─▀█─▐▌▐▀▄▐▀▄─█─█
▐▌▐───▌▐───▐▄▄▌─▄█─▄█─▐▌▐▄█▐─█─█▄█



</pre>
    </div>
<div class="left" id="text">

    <pre>



    _________ _        _______ _________ _______  _______  _______  _______  _______
    \__   __/( (    /|(  ____ \\__   __/(  ___  )(  ____ \(  ____ )(  ___  )(       )
       ) (   |  \  ( || (    \/   ) (   | (   ) || (    \/| (    )|| (   ) || () () |
       | |   |   \ | || (_____    | |   | (___) || |      | (____)|| (___) || || || |
       | |   | (\ \) |(_____  )   | |   |  ___  || | ____ |     __)|  ___  || |(_)| |
       | |   | | \   |      ) |   | |   | (   ) || | \_  )| (\ (   | (   ) || |   | |
    ___) (___| )  \  |/\____) |   | |   | )   ( || (___) || ) \ \__| )   ( || )   ( |
    \_______/|/    )_)\_______)   )_(   |/     \|(_______)|/   \__/|/     \||/     \|

    </pre>
    <pre>
     _______  _______ _________ _       _________            __
    (  ____ )(  ____ )\__   __/( (    /|\__   __/  |\     /|/  \
    | (    )|| (    )|   ) (   |  \  ( |   ) (     | )   ( |\/) )
    | (____)|| (____)|   | |   |   \ | |   | |     | |   | |  | |
    |  _____)|     __)   | |   | (\ \) |   | |     ( (   ) )  | |
    | (      | (\ (      | |   | | \   |   | |      \ \_/ /   | |
    | )      | ) \ \_____) (___| )  \  |   | |       \   /  __) (_
    |/       |/   \__/\_______/|/    )_)   )_(        \_/   \____/


     By Gabriel A. Barbosa
    </pre>

</div>
    <div style="clear:both;"></div>
</div>

<div id="menu">

    <img src="img/instagram.png" height="60" /> <a href="./_init_instagram.php" target="_blank" style="position:relative;top:-18px;"> Iniciar server Capture Images Ajax</a><br>
    <img src="img/print.png" style="margin-left:6px;margin-right:6px;" /> <a href="./_init_impressora.php" target="_blank" style="position:relative;top:-17px;"> Iniciar server Impressora Ajax </a>

</div>

<div id="configure_hashtag">

   <span style="position:relative;top:6px;left:-4px;">#</span><input type="text" name="set_hashtag" value="<?=$_SESSION["hashtag"]?>" />
    <div id="desc"> Registros encontrados: <?=$count["data"]["media_count"]?> </div>
</div>

</body>
</html>