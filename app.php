
<?php
    $file = "config.txt";
    $fp = fopen($file, "r");
    $contents = fread($fp, filesize($file));
    echo $contents;

?>
