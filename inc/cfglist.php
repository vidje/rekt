<?php
$directory = "extras/configs/";
$phpfiles = glob($directory . "*.cfg");

foreach($phpfiles as $phpfile)
{
    echo '<li><a href="'.$phpfile.'">'.basename($phpfile).'</a></li>';
}
?>
