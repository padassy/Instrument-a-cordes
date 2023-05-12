</l->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icone/lecteur-de-musique.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lato:wght@300;700&family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Détail article</title>
    <link rel="stylesheet" href="css/style.css"> <!-- a voir avec le css personelle -->

</head>

<body>
    <div id="pageDetailArticle">
        <nav>
            <?php
            require_once "src/menu.php";
            require_once "../publicView/src/error.php";

            ?>
        </nav>
        <div id="glob">
            <section id="sectionDetail">
                <h1 class="fontLobster subtitleDetail titleDetailInstru"><?= $detailInstrument->title ?></h1>
                <p id="introDetail"><?= $detailInstrument->intro ?></p>
                <div id="bar">
                    <a href="#hist">Histoire</a>
                    <a href="#art">Artiste</a>
                    <a href="#gal">Galerie</a>
                    <a href="#son">Extrait sonore</a>
                    <a href="#url">Source</a>
                </div>
                <article id="articleDetail">
                    <h2 id="hist" class="fontLobster subtitleDetail">Histoire</h2>
                    <p><?= $detailInstrument->history ?></p>

                    <h2 class="fontLobster subtitleDetail">Techniques</h2>
                    <p><?= $detailInstrument->technics ?></p>

                    <h2 class="fontLobster subtitleDetail">Description</h2>
                    <p><?= $detailInstrument->description ?></p>

                    <h2 id="art" class="fontLobster subtitleDetail">Artistes</h2>

                    <?php
                    $nomMusicien = explode('||', $detailInstrument->musicianLastname);
                    $prenomMusicien = explode('||', $detailInstrument->musicianFirstname);
                    $bioMusicien = explode('||', $detailInstrument->musicianBio);
                    $idMusicien = explode(',', $detailInstrument->idMusician);


                    //var_dump($nomMusicien);
                    //var_dump($prenomMusicien);
                    //var_dump($bioMusicien);
                    //var_dump($idMusicien);
                    foreach ($idMusicien as $key => $value) :
                    ?>
                        <h3> <?= $prenomMusicien[$key] ?> <?= $nomMusicien[$key] ?></h3>
                        <p class="bioMusician"><?= $bioMusicien[$key] ?></p>

                    <?php
                    endforeach;

                    ?>

                    <h2 id="gal" class="fontLobster subtitleDetail">Galerie</h2>
                    <div id="boxGallery">
                        <?php

                        $nomPict = explode('||', $detailInstrument->pictureName);
                        $descriptionPict = explode('||', $detailInstrument->pictureDescription);
                        $mini = explode('||', $detailInstrument->pictureMini);
                        $middle = explode('||', $detailInstrument->pictureMiddle);
                        $full = explode('||', $detailInstrument->pictureFull);
                        $date = explode('||', $detailInstrument->pictureDate);
                        $pictureDateFetch = explode('||', $detailInstrument->pictureDateFetch);
                        $idPict = explode(',', $detailInstrument->idPicture);

                        foreach ($mini as $key => $value) :

                        ?>
                            <figure role="figure" aria-label="<?=$descriptionPict[$key]?>">
                            <a data-fslightbox="gallery" href="<?= $full[$key] ?>"><img src="<?=$middle[$key]?>" alt="<?= $nomPict[$key] ?>" class="img"></img></a>
                                <figcaption>
                                <?=$descriptionPict[$key]?>
                                </figcaption>
                            </figure>
                            

                        <?php
                        endforeach;
                        ?>
                    </div>
                    <h2 id="son" class="fontLobster subtitleDetail">Extrait audio</h2>
                    <div id="boxAudio">
                        <?php
                        $nomSon = explode('||', $detailInstrument->soundName);
                        $descripSon = explode('||', $detailInstrument->soundDescription);
                        $dateSon = explode('||', $detailInstrument->soundDate);
                        $son = explode('||', $detailInstrument->sound);
                        $idSon = explode(',', $detailInstrument->idSound);

                        foreach ($son as $key => $value) :
                        ?>

                            <div class="audioControl">
                                <audio controls src="<?= $value ?>"></audio>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>

                    <h2 id="url" class="fontLobster subtitleDetail">Sources</h2>





                </article>





            </section>
        </div>
        <footer>
            <?php include_once "src/footer.php" ?>
        </footer>


        <script src="js/fslightbox.js"></script>
    </div>
</body>

</html>