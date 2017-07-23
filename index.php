<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $gifs = shell_exec("/var/www/html/rob_me/gif_stream.sh");
        $gifs = explode("\n", $gifs);
        foreach($gifs as $gif){
            echo "<img style=\"height:300px\" src=\"$gif\"/>";
        }
    ?>
</body>
</html>
