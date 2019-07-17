<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete idien - Modify</title>
    <link rel="icon" sizes="32x32" href="img/favlogo.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<body style="font-family:'Roboto Condensed">

    <div class="row mx-auto">
        <a class="btn mx-auto btn-primary mt-5 mb-5" href="index_admin.php"><?=$_SESSION['admin']?></a>
    </div>
    <?php 

    if(!isset($_SESSION['admin'])){
        header('location:index_admin.php');
    }

    include 'function/co.php';

    include 'function/select.php';
        

    @$test = $_POST['titre'];
    @$test1 = $_POST['date_upload'];
    @$test2= $_POST['duree']; 
    @$test3 = $_POST['coach'];
    @$test4= $_POST['adresse']; 
    @$test5 = $_POST['img'];
    @$test6= $_POST['genre']; 
    @$test7= $_POST['description']; 


        if(isset($_POST['submit'])){
            $sql1 = $conn->query("UPDATE `video` SET `titre` = '$test', `date_upload` = '$test1', `duree` = '$test2', `coach` = '$test3', `adresse` = '$test4', `img` = '$test5', `genre` = '$test6', `description` = '$test7' WHERE `video`.`id_video`=$current_id");
            header('location:index_admin.php');
        }
    ?>

    <div class="container-fluid text-center">
        <h2 class="mx-auto">Modifier le film :</h2>
        <div class="row mx-auto ">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post">
                        <fieldset>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="titre" type="text" placeholder="nom" value="<?= $article['titre']?>"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="date_upload" type="date" placeholder="date_upload"
                                        value="<?= $article['date_upload']?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="duree" type="text" placeholder="image" value="<?= $article['duree']?>"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="coach" type="text" placeholder="coach" value="<?= $article['coach']?>"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="adresse" placeholder="fullscreen"
                                            value="<?= $article['adresse']?>" type="text" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <span class="col-md-1 col-md-offset-2 text-center"></span>
                                        <div class="col-md-8">
                                            <input name="img" placeholder="image 2" type="text"
                                                value="<?= $article['img']?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"></span>
                                            <div class="col-md-8">
                                                <textarea name="description" type="text"
                                                    placeholder="description"
                                                    class="form-control" rows="7" required><?= $article['description']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="genre" type="text" placeholder="genre" value="<?= $article['genre']?>"
                                            class="form-control" required>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <div class="col-md-8 mt-4 mb-4 text-center">
                                                <button type="submit" name="submit"
                                                    class="btn btn-primary btn-lg">Modifier</button>
                                            </div>
                                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
