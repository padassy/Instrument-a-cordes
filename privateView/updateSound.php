<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Modification</title>
</head>

<body>
    <?php
                  require_once "../publicView/src/error.php";

/*var_dump($_POST);
#var_dump($_FILES);
echo "instrument by id";
var_dump($instrumentById);*/
    ?>
    <div class="vh-100 vw-100 d-flex justify-content-center align-items-center flex-column mr-0 ml-0 ">
        <h1 class="mb-5">Ajouter un article</h1>
        <form action="" class="article row g-3 h-100 w-100 " id="formUpdateInstrument" method="POST" width="" name="formUpdateArticle" enctype="multipart/form-data" >
            <div class="row">
            <div class="form-group form-control col">
                    <label for="titleSound" class="">Titre du son :</label>
                    <input type="text" class="w-100" aria-describedby="" name="titleSound" value="<?=$soundById->soundName?>"></input>
                </div>
                <div class="form-group form-control col">
                    <label for="descriptionSound" class="">Description du son :</label>
                    <textarea type="text" class="w-100" aria-describedby="" name="descriptionSound"><?=$soundById->soundDescription?></textarea>
                </div>
                
                <div class="row">
                    <div class="form-group form-control col ">
                        <select name="idInstrument" class=" w-100 form-select h-100" id="idInstrument" value="" >
                            <option selected value="<?=$soundById->idInstrument?>"><?=$soundById->title?></option>
                            <?php
                            if(isset($dataInstrumentAdminAdd)):
                                foreach($dataInstrumentAdminAdd as $item):
                                    
                                    ?>
                            <option value="<?=$item->id?>"> <?=$item->title?></option>
                            <?php
                                endforeach;
                            endif;
                            
                            
                            ?>
                                
                            </select>
                    </div>
                    
                    
                    <div class=" col">
                            <figure>
                                <figcaption>Ecouter l'extrait sonore :</figcaption>
                                <audio src="<?=$instrumentById->soundDescription?>" preload="auto" ></audio>
                            </figure>

                                
                            </div>

                           <!--  <div class="custom-file  col">
                                <label class="custom-file-label" for="addSound">Ajouter un audio :</label>
                                <input type="file" class="custom-file-input w-100" id="addSound" lang="fr" name="addSound">
                                    
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="updateSound"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">
          
        
            
                
        


        </form>
        <a href="?p=addMusician">Musician</a>
        <a href="?p=addPicture">Picture</a>
        <a href="?p=addSound">Son</a>
        
    </div>
    <?php

var_dump($_POST)    ?>
</body>

</html>