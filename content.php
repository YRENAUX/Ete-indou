<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/testvideo.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/content.css">

</head>
<main>
<body>
    <?php include "include/header.php";?>

    <div class="container-fluid">
        <div class="row justify-content-center text-center mx-auto">
            <div class="col-md-12" id="head">
                <h1 id="head-title">BLABLABLIBLABLOU</h1>                
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">                                           
                        <div class="carousel-item active" id="main-vid">
                            <p class="carou-title">TITRE 1</p>
                            <p id="head-para2">
                            <span class="mot">Catégorie:</span><a href="#">&nbsp sport</a>
                            <span class="mot">Durée:</span> 15:24
                            <span class="mot">Date:</span> 30/04/2018
                            <span class="mot">Par:</span> John Snow
                                    </p>
                            <div class="row justify-content-center mx-auto" id="lecteur">
                                <div class="col-8" id="vid">
                                    <?php include "testvideo.php";?>
                                </div>
                                <div class="col-12" id="vid-petit">
                                    <?php include "video_petit.php";?>
                                </div>
                            </div>
                            <div class="row mx-auto" id="para">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="carousel-item" id="main-vid">
                            <p class="carou-title">TITRE 2</p>
                            <p id="head-para2">
                            <span class="mot">Catégorie:</span><a href="#">&nbsp yoga</a>
                            <span class="mot">Durée:</span> 40:20
                            <span class="mot">Date:</span> 18/02/2018
                            <span class="mot">Par:</span> Walther White
                                    </p>
                            <div class="row justify-content-center mx-auto">
                                <div class="col-8" id="vid">
                                    <?php include "testvideo.php";?>
                                </div>
                                <div class="col-12" id="vid-petit">
                                    <?php include "video_petit.php";?>
                                </div>
                            </div>
                            <div class="row mx-auto" id="para">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="carousel-item" id="main-vid">
                            <p class="carou-title">TITRE 3</p>
                            <p id="head-para2">
                            <span class="mot">Catégorie:</span><a href="#">&nbsp santé</a>
                            <span class="mot">Durée:</span> 31:28
                            <span class="mot">Date:</span> 02/01/2018
                            <span class="mot">Par:</span> Michael Scott
                                    </p>
                            <div class="row justify-content-center mx-auto">
                                <div class="col-8" id="vid">
                                    <?php include "testvideo.php";?>
                                </div>
                                <div class="col-12" id="vid-petit">
                                    <?php include "video_petit.php";?>
                                </div>
                            </div>
                            <div class="row mx-auto" id="para">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/seniorsport.jpg">
        <h1 class="para-title">Sport en video<br />efficace et ludique!</h1>
        </div>
        <div class="d-flex flex-row">
            <div id="recipeCarousel" class="carousel slide w-100  justify-content-center" data-ride="carousel">
            <h4 class="car-title">Autres vidéos de "catégorie 1"</h4>
                <div class="carousel-inner justify-content-center w-100 phf " role="listbox">
                    <div class="carousel-item row no-gutters justify-content-center active" id="carou">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10" id="car">
                                <div class="row">
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/1.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/2.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/3.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/4.png" id="miniature" alt=""></a></div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="carousel-item row no-gutters justify-content-center" id="carou">
                        <div class="row">
                        <div class="col-1"></div>
                            <div class="col-10 justify-content-center" id="car">
                                <div class="row">
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/1.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/2.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/3.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/4.png" id="miniature" alt=""></a></div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="carousel-item row no-gutters justify-content-center" id="carou">
                        <div class="row">
                        <div class="col-1"></div>
                            <div class="col-10 justify-content-center" id="car">
                                <div class="row">
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/1.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/2.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/3.png" id="miniature" alt=""></a></div>
                                    <div class="col-10 col-md-3 float-left" id="first"> <a href="content.php"><img
                                                src="img/4.png" id="miniature" alt=""></a></div>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    
</main>
    <?php include "include/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/testvideo.js" type="text/javascript"></script>
    <script src="js/parallax.min.js"></script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6003001.js"></script>
<!-- End of HubSpot Embed Code -->


</body>

</html>