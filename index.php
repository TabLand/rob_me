<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>&nbsp;<br/><br/></h1>
    <?php
        $gifs = shell_exec("cat /var/www/rob_me/gif.list | sort -R | head -25");
        $gifs = explode("\n", $gifs);
        foreach($gifs as $gif){
            echo "<img src=\"$gif\"/>";
        }
    ?>
    <h1 class="balance">I have &pound;<?php system("/opt/monzo/bin/balance.sh"); ?> in my ad-hoc spending account</h1>
    <h1 class="footer">With thanks to <a href="https://developers.giphy.com/">Giphy</a> for image search, and to <a href="https://developers.monzo.com/">Monzo</a> for building a public beta banking api</h1>
    <h1>&nbsp;<br/><br/></h1>
</body>
</html>
