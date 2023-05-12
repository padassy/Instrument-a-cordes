<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lato:wght@400;700&family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/icone/lecteur-de-musique.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Mélodie en Cordes</title>
</head>

<body>

    <header>

        <nav>
            <?php
            require_once "../publicView/src/menu.php";
            require_once "../publicView/src/error.php";
            ?>
        </nav>

    </header>
    <div class="container">
        <div id="boxLogoTitreHome">

            <div id="boxLogo">
                <img src="../public/assets/logo.png" alt="">
            </div>

            <div id="boxIntro">
                <h1 class="titleDancingFont">Mélodie en Cordes</h1>
                <h2 class="fontLobster" id="subtitleHome">Bienvenue sur mon blog dédié aux instruments à cordes !</h2>
                <p>Que vous soyez un musicien expérimenté, un débutant ou simplement un passionné de musique, vous trouverez ici des
                    informations utiles et intéressantes sur les différents types d'instruments à cordes, leur histoire, leur fabrication, leur
                    fonctionnement et bien plus encore.</p>
                <p>Des guitares acoustiques et électriques aux violons, en passant par les ukulélés et les mandolines, je vous ferai
                    découvrir la richesse et la diversité de ces instruments qui ont joué un rôle crucial dans l'histoire de la musique et
                    continuent d'inspirer de nombreux artistes aujourd’hui.</p>
                <p>Que vous cherchiez des conseils pour choisir votre premier instrument à cordes, des astuces pour améliorer votre
                    technique de jeu ou des informations sur les dernières tendances et innovations dans le domaine, ce blog est fait pour
                    vous.</p>
                <p>Alors installez-vous confortablement, sortez votre instrument préféré et plongez avec moi dans l'univers fascinant des
                    instruments à cordes !</p>

            </div>
        </div>
        <hr>

        <h1 class="fontLobster" id="subtitleTableauHome">Les 10 derniers articles à consulter </h1>
        <div id="boxTableauCartesHome">

            <?php

            if (isset($dataInstrumentHome)) :
                foreach ($dataInstrumentHome as $item) :
            ?>

                    <table class="tableauCartesHome">


                        <tr>
                            <td rowspan="4" colspan="2" class="imageTableauHome">
                                <img src="<?= $item['imageMiddle'] ?>" alt="<?= $item['name'] ?>">
                            </td>

                        </tr>


                        <tr>
                            <th>
                                <h2 class="fontLobster"><?= $item['title'] ?></h2>
                            </th>
                        </tr>


                        <tr>
                            <td class="texteTableauHome">
                                <p><?= truncate($item['shortIntro']) ?></p>
                            </td>

                        </tr>


                        <tr>
                            <td class="lienInstrumentHome">
                                <a href="?idInstrument=<?= $item['id'] ?>" class="fontLato">Lire la suite...</a>
                            </td>
                        </tr>

                    </table>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
    <footer>
        <?php
        require_once "../publicView/src/footer.php"
        ?>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>