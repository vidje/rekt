<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

  try {
    $db = new PDO('mysql:host=localhost;dbname=rekt', 'rekt', '*168C86C2017038B980552FB472F24CF539496CB9') or die("can't open db");
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //var_dump($db);
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
