<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($nombre = 1; $nombre <= 10; $nombre = $nombre + ($nombre/2))
        {
            echo $nombre.' ';
        }
        ?>
    </body>
</html>
