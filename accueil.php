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
</head>
<style>
    * {
        #font-family: open sans;
    }

    #hr {
        background-color: #ff5c00 !important;
    }

    #all {
        margin: 8% 0 3% 0;
        border: solid 2px #FF823B;
    }

    .accueiltitle {
        margin: 5% 0;
        text-align: center;
    }

    .accueilimg {
        margin-bottom: 1%;
        width: 100%;
    }

    .accueilpara {
        text-align: center;
        padding: 2% 0 0 0;
        font-size: 20px;
        font-weight: 600;
    }

    #bloc {
        display: flex;
        flex-wrap: wrap;
        background-color: #eee;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    #btn {
        margin: 1% 1%;
        border-radius: 5px;
        width: 300px;
    }


    .btn-secondary:hover {
        background-color: rgb(165, 165, 165) !important;
        cursor: pointer;
    }

    .btn-secondary.active {
        background-color: #FF823B !important;
    }

    .accueilform {
        justify-content: center;
        text-align: center;
        margin: 3%;
    }

    .form-control {
        border: solid 2px #FF823B;
    }

    .enter {
        background-color: #FF823B !important;
        color: black !important;
        padding: 1% 2%;
        border-radius: 5px;
        font-size: 24px;
        font-weight: 500;
    }

    .list {
        display: none;
    }

    @media only screen and (max-width: 960px) {

        #all {
            margin: 16% 0 3% 0;
        }
    }

    @media only screen and (max-width: 800px) {

        #all {
            margin: 24% 0 8% 0;
        }

        .accueiltitle {
            font-size: 24px;
        }

        .accueilpara {
            font-size: 16px;
        }

        #bloc {
            display: none;
        }

        .list {
            display: block;
        }
    }
</style>

<body>

    <?php include "header_accueil.php";?>

    <div class="container-fluid">
        <div class="row justify-content-center text-align-center">
            <div class="col-1"></div>
            <div class="col-10" id="all">
                <h1 class="accueiltitle">Bienvenue sur le site de vidéos d'Eté indien</h1>
                <img class="accueilimg" src="img/sp.png" alt="imageaccueil">
                <hr class="col-4" id="hr">
                <p class="accueilpara">Veuillez selectionner votre mutuelle ci-dessous et entrer le code d'accès que
                    nous vous avons fournit.</p>
                <div class="btn-group btn-group-toggle" data-toggle="buttons" id="bloc">
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/a.jpg" alt="gmf" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/b.png" alt="harmonie" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/c.jpg" alt="maif" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/d.jpg" alt="matmut" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/e.png" alt="axa" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/f.jpg" alt="probtp" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/g.jpg" alt="gan" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/h.jpg" alt="excellence" style="max-height: 4em;">
                    </label>
                    <label class="btn btn-secondary" id="btn">
                        <input class="input" type="radio" name="options" id="option1" autocomplete="off" checked> <img
                            src="img/i.jpg" alt="april" style="max-height: 4em;">
                    </label>
                </div>
                <form class="list">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Votre mutuelle:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>GMF</option>
                            <option>Harmonie mutuelle</option>
                            <option>MAIF</option>
                            <option>Matmut</option>
                            <option>AXA</option>
                            <option>Pro BTP</option>
                            <option>GAN</option>
                            <option>Excellence</option>
                            <option>April</option>
                        </select>
                    </div>
                </form>
                <form class="accueilform">
                    <div class="form-group">
                        <input type="motdepasse" class="form-control" id="mdp" aria-describedby="MotDePasse"
                            placeholder="Entrer le code d'accès ici">
                        <small id="mdpHelp" class="form-text text-muted">Le code d'accès à la section de votre mutuelle
                            vous a été fournit suite à votre inscription</small>
                    </div>
                    <a class="enter" href="menu.php" class="btn btn-primary">Entrer</a>
                </form>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <?php include "footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>