<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css">
    <title>Article</title>
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
        <div id="boxPageArticle"> 
            <div id="boxCategory">
                <?php
                if (isset($category)):
                foreach($category as $item):
                ?>
                    
                        <a href="?idCategory=<?=$item->idCategory?>"><?=$item->nameCategory?></a>
                    
                <?php
                    endforeach;
                endif;
                ?>
                </div>
                <?php
                if(isset($instruments)):
                foreach ($instruments as $item):
                ?>
                      <table class="tableauCartesArticle" style="background: no-repeat url(<?=$item->pictureMiddle?>)bottom ; background-size:cover ;border-radius:15px;" >


                            <tr>
                                <th colspan="2" >
                                    <h2 class="titleTableauArticle"><?= $item->title?></h2>
                                </th>

                            </tr>


                            <tr class="fondTableauArticle">
                                
                                <td class="texteTableauArticle">
                                    <p><?=truncate($item->shortdescription)?></p>
                                </td>
                            </tr>


                            <tr class="fondTableauArticle">
                                <td>
                                    <a href="?idInstrument=<?=$item->idInstrument?>" class="linkArticle">En savoir plus ...</a>
                                </td>
                            </tr>

                            </table>


            <?php
                endforeach;
                elseif(isset($categoryInstrument)):
                    #var_dump($categoryInstrument);
                    foreach ($categoryInstrument as $item):
            ?>
                    <table class="tableauCartesArticle" style="background: no-repeat url(<?=$item->pictureMiddle?>)center ; background-size:cover ;border-radius:15px;" >
                        

                        <tr>
                            <th colspan="2" >
                                <h2 class="titleTableauArticle"><?= $item->title?></h2>
                            </th>
                        
                        </tr>

                        <tr class="fondTableauArticle" >
                            
                            <td class="texteTableauArticle">
                                <p><?=truncate($item->shortdescription)?></p>
                            </td>
                        </tr>


                        <tr class="fondTableauArticle">
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