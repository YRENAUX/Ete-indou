
<?php
/*
$username = 'dbo776287041';              
$password = '5sjm92q49';              

try{
$conn = new PDO('mysql:host=db776287041.hosting-data.io;port=3306;dbname=db776287041;charset=utf8', $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
*/
try{
$conn = new PDO('mysql:host=localhost;dbname=ete;charset=utf8', 'root', '' /*$username, $password*/);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
    catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>
