<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

  try {
    $db = new PDO('sqlite:/var/www/rektangle.org/public_html/db/rekt.db') or die("can't open db");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //var_dump($db);
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
