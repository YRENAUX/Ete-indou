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
    <link href="testvideo.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/content.css">
    <style>
        .container-fluid {
            padding: 0;
            font-family: arial;
        }

        #head {
            padding: 0;
            margin-top: 100px;
        }


        #para {
            padding: 2% 0 2% 0;
            background-color: #4C4C4C;
        }

        #head-title {
            height: 120px;
            padding: 2%;
        }

        #head-vid {
            background-color: #EEEEEE;
        }


        #head-para {
            padding: 2%;
            height: 200px;
            background-color: #4C4C4C;
            border: solid 3px rgba(247, 247, 247, 0.253);
            border-radius: 10px;
            color: #eee;
        }

        #head-para2 {
            padding: 2%;
            height: 200px;
            background-color: #4C4C4C;
            line-height: 1.8em;
            border: solid 3px rgba(247, 247, 247, 0.253);
            border-radius: 10px;
            color: #eee;
        }

        #main-vid {
            background-color: #4C4C4C;
            padding-top: 2%;
            font-family: arial;
            font-size: 1.6em;
            line-height: 2.4em;
        }


        .carou-title {
            font-size: 30px;
            color: #eee;
            background-color: rgba(247, 247, 247, 0.253);
            padding: 0 1% 0 1%;
            border-radius: 5px;
        }


        .parallax-window {
            margin-top: 2em;
            min-height: 30em;
            width: 100%;
        }

        #first {
            padding-left: 3%;
            padding-right: 3%;
            max-height: 200px;
            width: 355px;
        }

        #recipeCarousel {
            margin-top: 2%;
            margin-bottom: 2%;
            padding-top: 2%;
            padding-bottom: 2%;
            background-color: #787878;
        }


        .carousel-control-next,
        .carousel-control-prev {
            width: 8%;
        }

        #car {
            padding-left: 0;
            margin-left: -1%;
        }

        #miniature {
            width: 120%;
        }

        #vid-petit {
            display: none;
        }

        @media only screen and (max-width: 730px) {

            #head-title {
                font-size: 24px;
                height: 50px;
            }


            .carou-title {
                display: none;
            }

            #main-vid iframe {
                height: 150px;
                width: 266px;
            }

            #head-para {
                font-size: 14px;
                height: 100px;
                line-height: 1.6em;
            }

            #head-para2 {
                font-size: 16px;
                height: 100px;
            }

            #car {
                margin-left: 13%;
            }

            #first {
                padding: 10%;
            }

            #vid {
                display: none;
            }

            #vid-petit {
                display: block;
            }

        }
    </style>
</head>

<body>
    <?php
    include "header.php";
   ?>

    <div class="container-fluid">
        <div class="row justify-content-center text-center mx-auto">
            <div class="col-md-12" id="head">
                <h1 id="head-title">BLABLABLIBLABLOU</h1>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">

                        <div class="carousel-item active" id="main-vid">
                            <p class="carou-title">TITRE 1</p><br>
                            <div class="row justify-content-center">
                                <div class="col-8" id="vid">
                                    <?php
    include "testvideo.php";
   ?>
                                </div>
                                <div class="col-8" id="vid-petit">
                                    <?php
    include "video_petit.php";
   ?>
                                </div>

                            </div>
                            <div class="row mx-auto" id="para">

                                <div class="col-md-1"></div>
                                <div class="col-md-7">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet ab numquam accusamus</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <p id="head-para2">
                                        <a href="#">catégorie 1</a><br>
                                        durée: 15:24<br>
                                        date: 30/04/2018
                                    </p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div class="carousel-item" id="main-vid">
                            <p class="carou-title">TITRE 2</p><br>
                            <div class="row justify-content-center">
                                <div class="col-8" id="vid">
                                    <?php
    include "testvideo.php";
   ?>
                                </div>
                                <div class="col-8" id="vid-petit">
                                    <?php
    include "video_petit.php";
   ?>
                                </div>
                            </div>
                            <div class="row mx-auto" id="para">

                                <div class="col-md-1"></div>
                                <div class="col-md-7">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet ab numquam accusamus</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <p id="head-para2">
                                        <a href="#">catégorie 2</a><br>
                                        durée: 22:01<br>
                                        date: 18/02/2019
                                    </p>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                        <div class="carousel-item" id="main-vid">
                            <p class="carou-title">TITRE 3</p><br>
                            <div class="row justify-content-center">
                                <div class="col-8" id="vid">
                                    <?php
    include "testvideo.php";
   ?>
                                </div>
                                <div class="col-8" id="vid-petit">
                                    <?php
    include "video_petit.php";
   ?>
                                </div>
                            </div>
                            <div class="row mx-auto" id="para">

                                <div class="col-md-1"></div>
                                <div class="col-md-7">
                                    <p id="head-para">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Reiciendis modi voluptas saepe excepturi corporis, voluptatem eius distinctio
                                        dolor esse eveniet ab numquam accusamus</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <p id="head-para2">
                                        <a href="#">catégorie 3</a><br>
                                        durée: 36:21<br>
                                        date: 15/03/2019
                                    </p>
                                </div>
                                <div class="col-md-1"></div>
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
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/kfilm9.jpg"></div>
        <div class="d-flex flex-row">
            <div id="recipeCarousel" class="carousel slide w-100  justify-content-center" data-ride="carousel">
                <div class="carousel-inner justify-content-center w-100 phf " role="listbox">
                    <div class="carousel-item row no-gutters justify-content-center active" id="carou">
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

    <?php
    include "footer.php";
   ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="testvideo.js" type="text/javascript"></script>
    <script src="parallax.min.js"></script>

</body>

</html>