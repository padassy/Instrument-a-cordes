<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Article</title>
</head>
<body>
    <header>
         <nav>
            <?php
              require_once "../publicView/src/menu.php";
            ?>
        </nav>
    </header>
        <div id="boxPageArticle"> 
            <div id="boxCategory">
                <?php
                if (isset($category)):
                foreach($category as $item):
                ?>
                    
                        <a href="?idCategory=<?=$item['idCategory']?>"><?=$item['nameCategory']?></a>
                    
                <?php
                    endforeach;
                endif;
                ?>
                </div>
                <?php
                if(isset($instruments)):
                foreach ($instruments as $item):
                ?>
                <table class="tableauCartesArticle">


                        <tr>
                            <th colspan="2" >
                                <h2 class="titleTableauArticle"><?= $item->title?></h2>
                            </th>
                           
                        </tr>


                        <tr>
                            
                            <td class="texteTableauArticle">
                                <p><?=$item->shortdescription?></p>
                            </td>
                            <td rowspan="2" class="imageTableauArticle">
                                <img src="<?=$item->picture?>" alt="<?=$item->pictureName?>">
                            </td>
                         </tr>


                        <tr>
                            <td>
                                <a href="?idInstrument=<?=$item->idInstrument?>" class="linkArticle">En savoir plus ...</a>
                            </td>
                        </tr>

                    </table>


            <?php
                endforeach;
                elseif(isset($categoryInstrument)):
                    foreach ($categoryInstrument as $item):
            ?>
                    <table class="tableauCartesArticle" style=" background:rgba(0, 0, 0, .1) url(<?=$item->picture?>)" >


                        <tr>
                            <th colspan="2" >
                                <h2 class="titleTableauArticle"><?= $item->title?></h2>
                            </th>
                        
                        </tr>


                        <tr>
                            
                            <td class="texteTableauArticle">
                                <p><?=$item->shortdescription?></p>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <a href="?idInstrument=<?=$item->idInstrument?>" class="linkArticle">En savoir plus ...</a>
                            </td>
                        </tr>

                    </table>
            
            
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