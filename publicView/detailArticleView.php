</l-><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <section>
     
        <article>
            <h1><?=$detailInstrument->title?></h1>
            <p><?=$detailInstrument->intro?></p>
        </article>
        
        <article>
            <p><?=$detailInstrument->history?></p>
        </article>
        
        <article>
            <p><?=$detailInstrument->technics?></p>
        </article>

         <article>
            <p><?=$detailInstrument->description?></p>
        </article>  
        
        <article>
        <?php if(isset($item->pictureMini)):?>
            <p><?=$detailInstrument->pictureMini?></p>
            <?php endif;?>
        </article>
        <article>
            <?php
            $nomMusicien = explode('||',$detailInstrument->musicianLastname);
            $prenomMusicien = explode('||',$detailInstrument->musicianFirstname);
            $bioMusicien = explode('||',$detailInstrument->musicianBio);
            $idMusicien = explode(',',$detailInstrument->idMusician);

            var_dump($nomMusicien);
            var_dump($prenomMusicien);
            var_dump($bioMusicien);
            var_dump($idMusicien);
            foreach ($idMusicien as $key => $value):
            ?>
            <p><?=$nomMusicien[$key]?>,<?=$prenomMusicien[$key]?>,<?=$bioMusicien[$key]?></p>
            
        </article>
        <?php
        endforeach;

        ?>
    
    
        <article>
            <p><?=$detailInstrument->sound?></p>
        </article>
    
      
    </section>


    <footer>
        <?php include_once "src/footer.php"?>
    </footer>
    
</body>
</html>

