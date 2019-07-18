
<?php

$req = $conn->prepare('SELECT nom, mdp FROM `mutuelle` WHERE nom = :nom AND mdp = :mdp');
?>