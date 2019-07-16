<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto">
            <div class="col-xl-2" id="left">
                <ul class="menu">
                    <div class="liens">
                        <img src="img/logoo.png" alt="logo" class="menu-img">
                        <hr class="col-4" id="hr">
                        <li class="cat" href="#">Nouveautés</li>
                        <li class="cat" href="#">Sport</li>
                        <li class="cat" href="#">Yoga</li>
                        <li class="cat" href="#">Recette</li>
                        <li class="cat" href="#">Autres vidéos</li>
                        <hr class="col-4" id="hr">
                    </div>
                </ul>
            </div>
            <div class="col-xl-10 col-lg-12" id="right">
                <div class="head">
                    <?php include "include/header.php";?>
                </div>
                <h1 class="main-title">BLABLIBLABLOU</h1>
                <hr class="col-4" id="hr">
                <div class="bandeau">
                    <img src="img/logo.png" alt="logo" class="img-fluid" id="main-photo">
                    <p class="main-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et in dolore natus,
                        perferendis incidunt, similique impedit fugit reprehenderit pariatur officia ut ducimus? Dolorem
                        odio exercitationem sed illum aspernatur veniam velit.</p>
                </div>
                <hr class="col-4" id="hr">
                <div class="mini_menu">
                    <div class="row justify-content-center text-align-center">
                        <div class="dropdown" id="list">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catégories
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Sport</a>
                                <a class="dropdown-item" href="#">Yoga</a>
                                <a class="dropdown-item" href="#">Santé</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mx-auto">
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/1.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 1</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 1</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/2.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 2</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 2</a>
                                    <p>32:10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/3.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 3</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 1</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mx-auto">
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/5.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 5</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 1</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/6.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 6</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 2</a>
                                    <p>32:10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/7.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 7</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 3</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center mx-auto">
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/9.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 9</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 1</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/2.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 10</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 2</a>
                                    <p>32:10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6" id="vid">
                        <div class="card" style="width:20rem;">
                            <a href="content.php"><img src="img/4.png" id="liens" alt=""></a>
                            <div class="card-body">
                                <a href="#" class="card-title">vidéo 4</a>
                                <div class="row" id="sous-vid">
                                    <a href="#">catégorie 4</a>
                                    <p>20:28</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <hr class="col-4" id="hr"><br>
                <footer>
                    <?php include "include/footer.php"; ?>
                </footer>
            </div>
        </div>
    </div>
</main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6003001.js"></script>
    <!-- End of HubSpot Embed Code -->

</body>

</html>