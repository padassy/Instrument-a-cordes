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
        <?php include_once "src/menu.php"?>
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
            <p><?=$detailInstrument->picture?></p>
        </article>
        <article>
            <p><?=$detailInstrument->musicianFirstname?></p>
        </article>
    
    
        <article>
            <p><?=$detailInstrument->sound?></p>
        </article>
    
      
    </section>


    <footer>
        <?php include_once "src/footer.php"?>
    </footer>
    
</body>
</html>
