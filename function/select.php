<?php

$current_id=$_GET['id'];
$sql=$conn->prepare("SELECT * FROM video WHERE id_video=$current_id");
$sql->execute();
$article=$sql->fetch();
?>
   