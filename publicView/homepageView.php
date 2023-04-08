<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Homepage</title>
</head>
<body>

    <header>

        <nav>
            <?php
            require_once "../publicView/src/menu.php"
            ?>
        </nav>

    </header>

    <div id="boxLogoTitreHome">

        <div id="boxLogo">
            <img src="" alt="">
        </div>

        <div id="boxIntro">
            <h1>Titre Site</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere laboriosam voluptates quaerat vero. Illum quod repellat iure maiores esse ullam corrupti omnis est maxime, aut magnam. Distinctio, voluptas iusto. Sed!</p>

        </div>

    </div>
    <div id="boxTableauCartesHome">

        <?php
        
        if (isset($dataInstrumentHome)):
            foreach ($dataInstrumentHome as $item):
            ?>
            <table>

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
        <table>

            <tr>
                <td rowspan="2"> Image</td>
                <td>Titre de l'instrument</td>
            </tr>

            <tr>
                <td>Description: Pas plus de 60 caractères</td>
            </tr>


            </table>
    </div>
    
    <footer>
        <?php
            require_once "../publicView/src/footer.php"
        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>