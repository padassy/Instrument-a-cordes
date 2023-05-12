</l-><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icone/lecteur-de-musique.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Détail article</title>
    <link rel="stylesheet" href="../public/css/style.css"> <!-- a voir avec le css personelle -->

</head>
<body>
    <nav>
        <?php 
        require_once "src/menu.php";
        require_once "../publicView/src/error.php";

        ?>
    </nav>
<div id="glob">
    <div id="bar">
        <a href="#hist">Histoire</a> 
        <a href="#art">Artiste</a>
        <a href="#gal">Galerie</a>
        <a href="#son">Extrait sonore</a>
        <a href="#url">Source</a>
    </div>
    <section>
     
        <article>
            <h1><?=$detailInstrument->title?></h1>
            <p><?=$detailInstrument->intro?></p>
       
            <h2 id="hist">Histoire</h2>
            <p><?=$detailInstrument->history?></p>

            <h2>Techniques</h2>
            <p><?=$detailInstrument->technics?></p>

            <h2>Description</h2>
            <p><?=$detailInstrument->description?></p>
            
            <h2 id="art">Artistes</h2>
            <?php
            $nomMusicien = explode('||',$detailInstrument->musicianLastname);
            $prenomMusicien = explode('||',$detailInstrument->musicianFirstname);
            $bioMusicien = explode('||',$detailInstrument->musicianBio);
            $idMusicien = explode(',',$detailInstrument->idMusician);

            //var_dump($nomMusicien);
            //var_dump($prenomMusicien);
            //var_dump($bioMusicien);
            //var_dump($idMusicien);
            foreach ($idMusicien as $key => $value):
            ?>
            <h4><?=$nomMusicien[$key]?> <?=$prenomMusicien[$key]?></h4>
            <p><?=$bioMusicien[$key]?></p>
            
            <?php
            endforeach;

            ?>
            
            <h2 id="gal">Galerie</h2>
            <?php

            $nomPict= explode('||',$detailInstrument->pictureName);
            $descriptionPict = explode('||',$detailInstrument->pictureDescription);
            $mini = explode('||',$detailInstrument->pictureMini);
            $middle = explode('||',$detailInstrument->pictureMiddle);
            $full = explode('||',$detailInstrument->pictureFull);
            $date = explode('||',$detailInstrument->pictureDate);
            $pictureDateFetch = explode('||',$detailInstrument->pictureDateFetch);
            $idPict = explode(',',$detailInstrument->idPicture);
           
            foreach ($mini as $key => $value):

        ?>
            <img src="<?=$value?>"></img>

            
            <?php
            endforeach;
            ?>
            <h2 id="son">Extrait audio</h2>
            <?php
            $nomSon= explode('||',$detailInstrument->soundName);
            $descripSon= explode('||',$detailInstrument->soundDescription);
            $dateSon = explode('||',$detailInstrument->soundDate);
            $son = explode('||',$detailInstrument->sound);
            $idSon = explode(',',$detailInstrument->idSound);

            foreach ($son as $key => $value):
            ?>

            
            <audio controls src="<?=$value?>"></audio>

            <?php
            endforeach;
            ?>

            <h2 id="url">Sources</h2>
           

    
    
        </article>
    
      
    </section>
</div>
    <footer>
        <?php include_once "src/footer.php"?>
    </footer>
    
</body>
</html>


    
</body>
</html>

