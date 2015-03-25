<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Instagram - Impressora</title>

    <meta name="author" content="Gabriel A. Barbosa">

    <style>
        article, aside, figure, footer, header, hgroup,
        menu, nav, section { display: block; }
        ul {
            width: 950px;
        }
        ul > li {
            float: left;
            list-style: none;
            padding: 4px;
        }
        #more {
            bottom: 8px;
            margin-left: 80px;
            position: fixed;
            font-size: 13px;
            font-weight: 700;
            line-height: 20px;
        }
    </style>

    <script src="js/jquery.min.js"></script>

    <script>
        $(function() {

            function UPDATE() {
                $.ajax({
                    type: 'GET',
                        async: false,
                    url: 'impressora.php'
                    ,beforeSend: function() {

                        $("#Update img").show();

                    },success: function(data) {
                        $("#monitor").html(data);
                        $("#Update img").hide();
                    }
                });
            }

            UPDATE();

            setInterval(function(){ UPDATE(); }, 7000);


        });
    </script>
    <style>
        * {
            margin: 0; padding: 0;

        }
        #monitor  {
            padding: 0px 15px;
        }
        #Update {

            padding: 10px 20px;
            height: 20px;
            font-size:30px;
            margin-bottom: 10px;

        }
        #Update img { display:none; }
    </style>
</head>
<body>
<div id="Update"> <img src="img/r.gif" /> </div>
<div id="monitor"> </div>
</body>
</html>