
<?php

$req = $conn->prepare('SELECT * FROM `admin` WHERE nom = :nom AND mdp_admin = :mdp_admin');
?>