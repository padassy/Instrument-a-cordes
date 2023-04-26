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
    <title>Ajout</title>
</head>

<body>


    <form action="" class="article" id="formAddInstrument" method="POST">
    
            <div class="form-group form-control">
                <label for="titre" class="">Titre :</label>
                <input type="text" class="" aria-describedby="" name="titre">
                
            </div>
        </div>
        <div class="col">
            <div class="form-group form-control">
                <label for="category">Catégorie :</label>
                <select name="category" id="category" value="">
                    <?php
                    if(isset($category)):
                        foreach($category as $item):

                    ?>
                    <option value="<?=$item->idCategory?>"> <?=$item->nameCategory?></option>
                    <?php
                        endforeach;
                    endif;

                    ?>
                </select>
            </div>
    

            <div class="form-group form-control">
                <label for="intro" class="">Intro :</label>
                <textarea type="text" class="" aria-describedby="" name="intro"></textarea>
            </div>
        
            <div class="form-group form-control">
                <label for="description" class="">Description :</label>
                <textarea type="text" class="" aria-describedby="" name="description"></textarea>
            </div>
    
            <div class="form-group form-control">
                <label for="history" class="">Histoire :</label>
                <textarea type="text" class="" aria-describedby="" name="history"></textarea>
            </div>
      
            <div class="form-group form-control">
                <label for="technics" class="">Technique :</label>
                <textarea type="text" class="" aria-describedby="" name="technics"></textarea>
            </div>
    
    <div class="form-group">
        <label for="actif" class="labelActif">Visible </label>
        <button type="submit" class="btn-active">active</button>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
            Ajouter une image
        </label>
    </div>
    
            <div class="form-group form-control">
                <label for="titleImage" class="">Titre de l'image:</label>
                <textarea type="text" class="" aria-describedby="" name="titleImage"></textarea>
            </div>
      >
            <div class="form-group form-control">
                <label for="descriptionImage" class="">Description :</label>
                <textarea type="text" class="" aria-describedby="" name="descriptionImage"></textarea>
            </div>
    
  
            <div class="custom-file">
                <label class="custom-file-label" for="customFile">Image miniature</label>
                <input type="file" class="custom-file-input" id="customFile" lang="fr">
                
            </div>
    
        
            <div class="custom-file">
                <label class="custom-file-label" for="customFile2">Image moyenne</label>
                <input type="file" class="custom-file-input" id="customFile2" lang="fr">
                
            </div>
      
            <div class="custom-file">
                <label class="custom-file-label" for="customFile3">Grande image</label>
                <input type="file" class="custom-file-input" id="customFile3" lang="fr">
                
            </div>
        </div>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck2">
        <label class="form-check-label" for="gridCheck2">
            Ajouter un musicien
        </label>
    </div>
    
            <div class="form-group form-control">
                <label for="firstnameMuscian" class="">Prénom du musicien :</label>
                <textarea type="text" class="" aria-describedby="" name="firstnameMuscian"></textarea>
            </div>
   
            <div class="form-group form-control">
                <label for="lastnameMusician" class="">Nom du musicien :</label>
                <textarea type="text" class="" aria-describedby="" name="lastnameMusician"></textarea>
            </div>
    
 
        <div class="form-group form-control">
            <label for="descriptionImage" class="">Biographie :</label>
            <textarea type="text" class="" aria-describedby="" name="descriptionImage"></textarea>
        </div>
   


    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck3">
        <label class="form-check-label" for="gridCheck3">
            Ajouter un audio
        </label>
    </div>
   
            <div class="custom-file ">
                <label class="custom-file-label" for="customFile">Ajouter un audio :</label>
                <input type="file" class="custom-file-input" id="customFile" lang="fr">
                
            </div>
      
            <div class="form-group form-control">
                <label for="titleSound" class="">Titre du son :</label>
                <textarea type="text" class="" aria-describedby="" name="titleSound"></textarea>
            </div>
                
            </div>
  
     
        <input type="submit" class="btn-ajouter">NEW ARTICLE</input>


    </form>
</body>

</html>