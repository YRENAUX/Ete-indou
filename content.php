<?php session_start();
?>
<?php include('function/co.php'); ?>

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
  <link rel="icon" sizes="64x64" href="img/fav.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="css/testvideo.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="css/content.css">

</head>
<main>

  <body>
    <?php
    require_once 'function/co.php';
    require_once 'function/select_vid.php';

    $video = getVid($conn,1, $_GET['id']);
    $id= $_GET['id'];
  

    // $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video < :id_video Order By id_video DESC LIMIT 1');
    // $stmt->execute(array('id_video' => 10));
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $precedent_id = $stmt->fetchColumn();    
    // var_dump($precedent_id);

    $precedent_id = -1;

    $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video < :id_video ORDER BY id_video DESC LIMIT 1');
    $stmt->execute(array('id_video' => $id));
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $precedent_id = $stmt->fetchColumn();

    //var_dump($precedent_id);

    // $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video > :id_video Order By id_video ASC LIMIT 1');
    // $stmt->execute(array('id_video' => 10));
    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // $suivant_id = $stmt->fetchColumn();  
    // var_dump($suivant_id);

    $suivant_id = -1;

    $stmt = $conn->prepare('SELECT id_video FROM video WHERE id_video > :id_video ORDER BY id_video ASC LIMIT 1');
    $stmt->execute(array('id_video' => $id));
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $suivant_id = $stmt->fetchColumn();

    //var_dump($suivant_id);

    ?>
    <div class="example1">
      <h3
        style="left: -1400px; top:-800px; font-size: 100em; opacity: 0.1; letter-spacing: -1050px; word-spacing: -800px; animation: example1 220s;  color: #FF823B;">
        été&nbsp;indien </h3>
      <h3>ETE&nbsp;INDIEN&nbsp;&nbsp;&nbsp;ETE&nbsp;INDIEN </h3>
      <h2>videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;videos</h2>
    </div>

    <!-- <p style="position: absolute; height:100%; font-size:210px; writing-mode: vertical-rl; text-orientation: upright; font-weight:900; font-familly: arial; letter-spacing: -120px; word-spacing: -130px; z-index: -200; color: orange;">ETE INDIEN</p>  -->
    <header>
      <?php include "include/header_content.php";?>
    </header>
    <div class="container-fluid">
      <div class="row justify-content-center text-center mx-auto">
        <div class="col-md-12" id="head">
          <h1 id="head-title"><?php echo $_SESSION["nom"]; ?></h1>
        </div>
        <div class="col-1 prev">
          <?php
          if ($precedent_id) {
            ?>
          <a class="content-control-prev" href="content.php?id=<?php echo ($precedent_id) ?>">
            < </a> <?php
                    }
                    ?></div> 
            <div class="col-12 col-md-10 p-0 content">
              <div class="content-inner">
                <div class="content-item" id="main-vid">
                  <p class="content-title"><?= $video->titre ?></p>
                  <p id="head-para2">
                    <span class="mot">Catégorie:&nbsp</span><a href="#"><?= $video->genre ?></a>
                    <span class="mot">Durée:</span> <?= $video->duree?>
                    <span class="mot">Date:</span> <?= $video->date_upload ?>
                    <span class="mot">Par:</span> <?= $video->coach ?>
                  </p>
                  <div class="row justify-content-center mx-auto" id="lecteur">
                    <div class="col-8" id="vid">
                      <div class="lecteur_frame">
                        <video id="videoPlayer" ontimeupdate="update(this)" width="600em" height="300em" preload="auto">
                          <!--mp4 en tête de liste pour compatibilité portable -->
                          <source src="<?= $video->adresse ?>" type="video/mp4">
                          Si la vidéo ne s'affiche pas correctement, merci de mettre à jour votre navigateur !!
                        </video>
                        <div id="progressBarControl">
                          <div id="progressBar" onclick="clickProgress('videoPlayer', this, event)"></div>
                        </div>
                      </div>
                      <div class="barre">
                        <div class="controls-L">
                          <button id="playBtn" class="control" onclick="play('videoPlayer', this)"><i
                              class="far fa-play-circle fa-2x" id="transportIcon"></i></button>
                          <button class="control" onclick="resume('videoPlayer')"><i
                              class="far fa-stop-circle fa-2x"></i></button>
                        </div>
                        <img src="img/logovid.png" class="logovid" alt="logo été indien" width="100em" height="100em" />
                        <div class="controls-R">
                          <span class="volume">
                            <a class="stick1" onclick="volume('videoPlayer', 0)"></a>
                            <a class="stick2" onclick="volume('videoPlayer', 0.3)"></a>
                            <a class="stick3" onclick="volume('videoPlayer', 0.5)"></a>
                            <a class="stick4" onclick="volume('videoPlayer', 0.7)"></a>
                            <a class="stick5" onclick="volume('videoPlayer', 1)"></a>
                          </span>
                          <button class="control" id="grdecran" onclick="fullscreen()"><i
                              class="fas fa-compress fa-2x"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="col-12" id="vid-petit">
                    <div class="lecteur_frame">
  <video id="videoPlayer" ontimeupdate="update(this)" width="300em" height="150em"
  preload="auto">
    <!--mp4 en tête de liste pour compatibilité portable -->
    <source src="<?= $video->adresse ?>" type="video/mp4">
    Si la vidéo ne s'affiche pas correctement, merci de mettre à jour votre navigateur !!
  </video>
  <div id="progressBarControl">
    <div id="progressBar" onclick="clickProgress('videoPlayer', this, event)"></div>
  </div>
</div>
<div class="barre">
  <div class="controls-L">
    <button id="playBtn" class="control" onclick="play('videoPlayer', this)"><i class="far fa-play-circle" id="transportIcon"></i></button>
    <button class="control" onclick="resume('videoPlayer')"><i class="far fa-stop-circle"></i></button>
  </div>
    <img src="img/logovid.png" alt="logo été indien" width="40em" height="40em"/>
  <div class="controls-R">
    <span class="volume">
      <a class="stick1" onclick="volume('videoPlayer', 0)"></a>
      <a class="stick2" onclick="volume('videoPlayer', 0.3)"></a>
      <a class="stick3" onclick="volume('videoPlayer', 0.5)"></a>
      <a class="stick4" onclick="volume('videoPlayer', 0.7)"></a>
      <a class="stick5" onclick="volume('videoPlayer', 1)"></a>
    </span>
    <button class="control" id="grdecran" onclick="fullscreen()"><i class="fas fa-compress"></i></button>
  </div>
</div>

                    </div>
                  </div>
                  <div class="row mx-auto" id="para">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <p id="head-para"><?= $video->description ?></p>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-1 prevm">
          <?php
          if ($precedent_id) {
            ?>
          <a class="content-control-prev" href="content.php?id=<?php echo ($precedent_id) ?>">
            < </a> <?php
                    }
                    ?></div> 
        <div class="col-1 next">
          <?php
          if ($suivant_id) {
            ?>
          <a class="content-control-next" href="content.php?id=<?php echo ($suivant_id) ?>">
            >
          </a><?php
                    }
                    ?>
        </div>
      </div>
    </div>

    <?php include "include/autresVideos.php"; ?>

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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="js/testvideo.js" type="text/javascript"></script>
<script src="js/parallax.min.js"></script>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6003001.js"></script>
<!-- End of HubSpot Embed Code -->


</body>

</html>