
<!-- Parallax -->

<div class="parallax-window" data-parallax="scroll" data-image-src="img/seniorsport.jpg">
<h1 class="para-title">Sport en video<br />efficace et ludique!</h1>
</div>

<!-- carousel des autres vidéos -->
<?php
    $stmt = $conn->prepare('SELECT * FROM video Order By id_video DESC');
    $stmt->execute();
    $video = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>


<div class="d-flex flex-row" style="min-height: 18rem;">
    <div id="recipeCarousel" class="carousel slide w-100  justify-content-center" data-ride="carousel">
    <h4 class="car-title">Autres vidéos de "catégorie 1"</h4>
    <div class="carousel" data-flickity='{ "groupCells": true, "prevNextButtons": true }'>
        <?php
            for($i = 0; $i < sizeof($video) ; $i++){
                echo
                '<div class="carousel-cell">
                    <a href="content.php"><img src="'.$video[$i]['img'].'"></a>
                </div>';
            }
        ?>
        </div>
    </div>
</div>
