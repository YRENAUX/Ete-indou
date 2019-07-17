
<?php

$req = $conn->prepare('SELECT * FROM `mutuelle` WHERE nom = :nom AND mdp = :mdp');
?>