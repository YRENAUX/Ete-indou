<?php session_start();
include 'function/verif_co.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ete indien - Create</title>
    <link rel="icon" sizes="64x64" href="img/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

</head>

<body>

    <div class="row mx-auto">
        <a class="btn mx-auto btn-primary mt-5 mb-5" href="index_admin.php"><?=$_SESSION['admin']?></a>
    </div>

    <?php 
    include 'function/co.php';

    @$test = $_POST['titre'];
    @$test1 = $_POST['date_upload'];
    @$test2= $_POST['duree']; 
    @$test3 = $_POST['coach'];
    @$test4= $_POST['adresse']; 
    @$test5 = $_POST['img'];
    @$test6= $_POST['genre'];  
    @$test7= $_POST['id_genre'];  
    @$test8= $_POST['description' | raw]; 
        if(isset($_POST['submit'])){
            
           $conn->query ("INSERT INTO `video` (`titre`, `date_upload`, `duree`, `coach`, `adresse`, `img`, `genre`, `id_genre`, `description`)
            VALUES ('$test', '$test1', '$test2', '$test3', '$test4', '$test5', '$test6', '$test7', '$test8')");
            header('location:create.php');
        }     
       
?>
    <div class="container text-center">
        <h2 class="mx-auto">Ajouter une vidéo :</h2>
        <div class="row mx-auto">
            <div class="col-md-12">
                <div class="well well-sm ">
                    <form class="form-horizontal offset-3" method="post" action="create.php">
                        <fieldset>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="titre" type="text" placeholder="titre" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="genre" type="text" placeholder="genre" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input class="form-control" name="id_genre" placeholder="id_genre">
                                    </div>
                                </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="date_upload" type="date" placeholder="date d'upload"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="duree" type="time" placeholder="duree" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"></span>
                                <div class="col-md-8">
                                    <input name="coach" type="text" placeholder="coach" class="form-control">
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input name="adresse" placeholder="url video" type="text" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <input class="form-control" name="img" placeholder="url img">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 text-center"></span>
                                    <div class="col-md-8">
                                        <textarea class="form-control" name="description" placeholder="description"
                                            rows="7" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 mt-4 mb-4 text-center">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-lg">Ajouter</button>
                                    </div>
                                </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
