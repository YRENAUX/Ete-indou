<?php
$req = $conn->query("SELECT * FROM video");
     $articles = $req->fetchAll();
?>