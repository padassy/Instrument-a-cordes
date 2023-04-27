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
    <?php
var_dump($_POST);
    ?>
    <div class="vh-100 vw-100 d-flex justify-content-center align-items-center flex-column">
        <h1 class="mb-5">Ajouter un article</h1>
        <form action="" class="article row g-3 h-50 w-75 " id="formAddInstrument" method="POST" width="" name="formAddArticle" >
            <div class="row">
                <div class="form-group form-control col">
                    <label for="titre" class="w-25">Titre :</label>
                    <input type="text" class="w-100" aria-describedby="" name="titre">
                    
                </div>
            
            
                <div class="form-group form-control col ">
                    <select name="category" class=" w-100 form-select h-100" id="category" value="" >
                    <option selected>Catégorie :</option>
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

                
                <div class="form-group col form-check">
                    
                        <input type="checkbox" class="btn-check w-25 mx-auto" id="btn-check-2-outlined" name="btn-check-2-outlined" checked value="1">
                        <label class="btn btn-outline-secondary w-50 " for="btn-check-2-outlined">Visible</label><br>
                
                    
                </div> 
            </div>           
            <div class="row">
                <div class="form-group form-control col">
                    <label for="intro" class="w-25">Intro :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="intro" rows="3"></textarea>
                </div>
            
                <div class="form-group form-control col">
                    <label for="description" class="w-25">Description :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-control col">
                    <label for="history" class="w-25">Histoire :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="history" rows="3"></textarea>
                </div>
        
                <div class="form-group form-control col">
                    <label for="technics" class="w-25">Technique :</label>
                    <textarea type="text" class=" w-100" aria-describedby="" name="technics" rows="3"></textarea>
                </div>
        
            </div>



            <p>
            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePicture" aria-expanded="false" aria-controls="collapsePicture">
                Ajouter une image
            </button>

            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSound" aria-expanded="false" aria-controls="collapseSound">
                Ajouter un audio
            </button>

            <button class="btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMusician" aria-expanded="false" aria-controls="collapseMusician">
                Ajouter un musicien
            </button>
            </p>

            <div style="">  
                <div class="collapse collapse-vertical" id="collapsePicture">
                    <div class="card card-body" style="width: 100%;">      
                        <div class="row">    
                            <div class="form-group form-control col">
                                <label for="titleImage" class="w-25">Titre de l'image:</label>
                                <input type="text" class="w-100" aria-describedby="" name="titleImage"></input>
                            </div>
                    
                            <div class="form-group form-control col">
                                <label for="descriptionImage w-25" class="">Description :</label>
                                <textarea type="text" class="w-100" aria-describedby="" name="descriptionImage" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-file col">
                                <label class="custom-file-label w-50" for="customFile">Image miniature</label>
                                <input type="file" class="custom-file-input" id="customFile" lang="fr">
                                
                            </div>
                    
                        
                            <div class="custom-file col">
                                <label class="custom-file-label w-50" for="customFile2">Image moyenne</label>
                                <input type="file" class="custom-file-input" id="customFile2" lang="fr">
                                
                            </div>
                    
                            <div class="custom-file col">
                                <label class="custom-file-label w-50" for="customFile3">Grande image</label>
                                <input type="file" class="custom-file-input" id="customFile3" lang="fr">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div style="">  
                <div class="collapse collapse-vertical" id="collapseMusician">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="firstnameMuscian" class="w-25">Prénom du musicien :</label>
                                <input type="text" class="w-100" aria-describedby="" name="firstnameMuscian"></input>
                            </div>
                
                            <div class="form-group form-control col">
                                <label for="lastnameMusician" class="w-25">Nom du musicien :</label>
                                <input type="text" class="w-100" aria-describedby="" name="lastnameMusician"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="bioMusician" class="w-25">Biographie :</label>
                                <textarea type="text" class="w-100" aria-describedby="" name="bioMusician"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="">  
                <div class="collapse collapse-vertical" id="collapseSound">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">

                            <div class="form-group form-control col">
                                <label for="titleSound" class="">Titre du son :</label>
                                <input type="text" class="w-100" aria-describedby="" name="titleSound"></input>
                            </div>
                            <div class="custom-file  col">
                                <label class="custom-file-label" for="customFile">Ajouter un audio :</label>
                                <input type="file" class="custom-file-input w-100" id="customFile" lang="fr">
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="addInstrument"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">
            
                
        


        </form>
    </div>
</body>

</html>