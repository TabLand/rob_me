<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $gifs = shell_exec("cat /var/www/rob_me/gif.list | sort -R | head -30");
        $gifs = explode("\n", $gifs);
        foreach($gifs as $gif){
            echo "<img src=\"$gif\"/>";
        }
    ?>
    <h1>I have &pound;<?php system("/opt/monzo/bin/balance.sh"); ?> in my ad-hoc spending account</h1>
</body>
</html>
