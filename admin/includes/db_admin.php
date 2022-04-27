<?php
$link = new mysqli('localhost', 'root', 'root123', 'excel') or die($link->error());
mysqli_set_charset($link, "utf8");

$link1 = new mysqli('localhost', 'root', 'root123', 'word') or die($link1->error());
mysqli_set_charset($link1, "utf8");

 ?>
