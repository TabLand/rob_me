<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $gifs = shell_exec("cat /var/www/html/rob_me/gif.list | sort -R | head -30");
        $gifs = explode("\n", $gifs);
        foreach($gifs as $gif){
            echo "<img src=\"$gif\"/>";
        }
    ?>
</body>
</html>
