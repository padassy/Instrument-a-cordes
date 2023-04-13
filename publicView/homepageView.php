<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mélodie en Cordes</title>
</head>
<body>

    <header>

        <nav>
            <?php
            require_once "../publicView/src/menu.php";
            foreach($category as $item):
            ?>
            <a href="?idCategory=<?=$item['idCategory']?>"><?=$item['nameCategory']?></a>
            <?php
            endforeach;
            ?>
        </nav>

    </header>

    <div id="boxLogoTitreHome">

        <div id="boxLogo">
            <img src="" alt="">
        </div>

        <div id="boxIntro">
            <h1>Mélodie en Cordes</h1>
                <h2>Bienvenue sur mon blog dédié aux instruments à cordes !</h2>
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
    <div id="boxTableauCartesHome">

        <?php
        
        if (isset($dataInstrumentHome)):
            foreach ($dataInstrumentHome as $item):
            ?>
            <table class="tableauCartesHome">

                <tr>
                    <td rowspan="3"> Image</td>
                    <td><?=$item['title']?></td>
                </tr>

                <tr>
                    <td><?=truncate($item['shortdescription'])?><a href="?idInstrument=<?=$item['id']?>">Lire la suite...</a></td>
                </tr>

                <tr>
                    <td></td>
                </tr>

            </table>
            <?php
            endforeach;
        endif;
        ?>
        
    </div>
    
    <footer>
        <?php
            require_once "../publicView/src/footer.php"
        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>