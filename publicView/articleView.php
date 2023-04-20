<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/articleView.css">
    <title>Article View</title>
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
        <div> 
         <?php
        
              if (isset($fetchDetailInstrument)):
                foreach ($fetchDetailInstrument as $item):
            ?>


            <div>

                 <img src="" alt="">

            </div>
            <div>
                 <h2><?=$item['title']?></h2>

                 <p><a href="?idInstrument=<?=$item['id']?>">Lire la suite...</a></p>

            </div>

            <?php
                endforeach;
            endif;
        ?>
 </div>






    <footer>

        <?php include_once "src/footer.php"?>
    </footer>
    <script src="../public/js/script.js"></script>
</body>
</html> 