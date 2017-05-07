<?php
$directory = "demos/";
$phpfiles = glob($directory . "*.zip");

foreach($phpfiles as $phpfile)
{
    echo '<li><a href="'.$phpfile.'">'.basename($phpfile).'</a></li>';
}
?>
