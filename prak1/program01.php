<?php
$guestName = $_GET['guest'];
$today = date('l');
$datetime = date('l jS \of F Y h:i:s A');

$backcolor = $_GET['color']

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor=<?= $backcolor  ?>>
    <h1>Program 01</h1>
    today is: <?php echo $datetime ?>
   <hr>
   <h2>Hello, <?php echo $guestName ?></h2>
   <h3>Happy <?php echo $today ?></h3
  </body>
</html>
