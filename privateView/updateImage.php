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

<body style="overflow-x: hidden;">
    <?php
                  require_once "../publicView/src/error.php";

#var_dump($_POST);
#var_dump($_FILES);
    ?>
 <div class="vh-100 vw-100 d-flex row m-0 p-0"> 
        <?php
            include_once "../privateView/src/menuPrivate.php";
        ?>  
  <div class="h-100 w-75 d-flex justify-content-center align-items-center flex-column mr-0 ml-0 p-0 ">    
      <h1 class="mb-5">Modifier l'image</h1>
        <form action="" class="article row g-3 w-100 " id="updatePicture" method="POST" width="" name="updatePicture" >
            <div class="row">    
                <div class="form-group form-control col">
                    <label for="titleImage" class="w-25">Titre de l'image:</label>
                    <input type="text" class="w-100" aria-describedby="" name="titleImage" value="<?=$pictureById->pictureName?>"></input>
                </div>
                    <div class="form-group form-control col ">
                        <label for="idInstrument">Instrument :</label>
                        <select name="idInstrument" class=" w-100 form-select" id="idInstrument" value="" >
                        <option value="<?=$pictureById->idInstrument?>" selected><?=$pictureById->title?></option>
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
            </div>
            <div class="row">
                
                    <div class="form-group form-control col">
                        <label for="descriptionImage w-25" class="">Description :</label>
                        <textarea type="text" class="w-100" aria-describedby="" name="descriptionImage" rows="3"><?=$pictureById->pictureDescription?></textarea>
                    </div>
                </div>
                
                <div class="row">

                    <div class="form-group">
                        <label for="dateTake">Date de prise :</label>
                        <input type="date" class="form-control" id="dateTake" value="<?=$pictureById->pictureDateTake?>">
                    </div>


                    <div class="form-group">
                        <label for="dateFetch">Date d'ajout :</label>
                        <input type="date" class="form-control" id="dateFetch" value="<?=$pictureById->pictureDateFetch?>">
                    </div>

                </div>
                
                <div class="row">
                    
                    <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="updatePictureSubmit"></input>
                    <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">
                </div>
                
                
                
        


        </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>