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
                <div class="form-group form-control col d-flex ">
                    <label for="titre" class="w-25 align-self-center">Titre :</label>
                    <input type="text" class="w-100 align-self-center" aria-describedby="" name="titre" value="<?=$instrumentById->title?>">
                    
                </div>
            
            
                <div class="form-group form-control col d-flex ">
                    <select name="category" class=" w-100 form-select h-100 align-self-center" id="category" value="<?=$instrumentById->nameCategory?>" >
                    <option value="<?=$instrumentById->idCategory?>" selected ><?=$instrumentById->nameCategory?> </option>
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
                <div class="form-group">
                    <label for="dateArticle">Date de l'article :</label>
                    <input type="date" class="form-control" id="dateArticle" placeholder="Date de l'ajout de l'article" value="<?=$instrumentById->dateArticle?>">
                </div>

                
                <div class="form-group col form-check d-flex ">
                    
                        <input type="checkbox" class="btn-check w-25 mx-auto align-self-center" id="btn-check-2-outlined" name="visible" checked value="<?=$instrumentById->visible?>">
                        <label class="btn btn-outline-secondary w-50 align-self-center " for="visible">Visible</label><br>
                
                    
                </div> 
            </div>           
            <div class="row h-25">
                <div class="form-group form-control col">
                    <label for="intro" class="w-25">Intro :</label>
                    <textarea type="text" class=" w-100 h-75" aria-describedby="" name="intro" rows="3" ><?=$instrumentById->intro?></textarea>
                </div>
            
                <div class="form-group form-control col">
                    <label for="description" class="w-25">Description :</label>
                    <textarea type="text" class=" w-100 h-75" aria-describedby="" name="description" rows="3" ><?=$instrumentById->description?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-control col">
                    <label for="history" class="w-25">Histoire :</label>
                    <textarea type="text" class=" w-100 h-75" aria-describedby="" name="history" rows="3"><?=$instrumentById->history?></textarea>
                </div>
        
                <div class="form-group form-control col">
                    <label for="technics" class="w-25">Technique :</label>
                    <textarea type="text" class=" w-100 h-75" aria-describedby="" name="technics" rows="3"><?=$instrumentById->technics?></textarea>
                </div>
        
            </div>

            <img src="value="<?=$instrumentById->pictureMiddle?>   > 

            
 <!--            <div style="">  
                <div class="collapse collapse-vertical" id="collapsePicture">
                    <div class="card card-body" style="width: 100%;"> 
                     
                        <div class="row">    
                            <div class="form-group form-control col">
                                <label for="titleImage" class="w-25">Titre de l'image:</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="titleImage" value="<#?=$instrumentById->pictureName?>"></input>
                            </div>
                    
                            <div class="form-group form-control col">
                                <label for="descriptionImage w-25" class="">Description :</label>
                                <textarea type="text" class="w-100 h-75" aria-describedby="" name="descriptionImage" rows="3" value="<#?=$instrumentById->pictureDescription?>"></textarea>
                            </div>
                        </div>
                            <div class="form-group form-control col">
                                <label for="imageMini" class="w-25">Lien de la miniature l'image:</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="imageMini" value="<#?=$instrumentById->pictureMini?>"></input>
                            </div>
                            <div class="form-group form-control col">
                                <label for="imageMiddle" class="w-25">Lien de la moyenne :</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="imageMiddle" value="<#?=$instrumentById->pictureMiddle?>"></input>
                            </div>
                            <div class="form-group form-control col">
                                <label for="imageFull" class="w-25">Lien de la grande :</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="imageFull" value="<#?=$instrumentById->pictureFull?>"></input>
                            </div>
                    
                 
                        </div>
                        <!-- <div class="row">
                            <div class="custom-file col">
                                <label class="custom-file-label w-50" for="addPicture">Image :</label>
                                <input type="file" class="custom-file-input" id="addPicture" lang="fr" name="addPicture"  >
                                        
                            </div>
                        </div> -->
<!--                     </div>
                </div>
            </div>
        
            <div style="">  
                <div class="collapse collapse-vertical" id="collapseMusician">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="firstnameMusician" class="w-25">Prénom du musicien :</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="firstnameMusician" value="<?=$instrumentById->musicianFirstname?>"></input>
                            </div>
                
                            <div class="form-group form-control col">
                                <label for="lastnameMusician" class="w-25">Nom du musicien :</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="lastnameMusician" value="<?=$instrumentById->musicianLastname?>"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-control col">
                                <label for="bioMusician" class="w-25">Biographie :</label>
                                <textarea type="text" class="w-100 h-75" aria-describedby="" name="bioMusician" ><?=$instrumentById->musicianBio?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div style="">   -->
<!--                 <div class="collapse collapse-vertical" id="collapseSound">
                    <div class="card card-body" style="width: 100%;"> 
                        <div class="row">

                            <div class="form-group form-control col">
                                <label for="titleSound" class="">Titre du son :</label>
                                <input type="text" class="w-100 h-75" aria-describedby="" name="titleSound" value="<#?=$instrumentById->soundName?>"></input>
                            </div>

                            <div class="form-group form-control col">
                                <label for="titleSound" class="">Titre du son :</label>
                                <textarea type="text" class="w-100 h-75" aria-describedby="" name="descriptionSound" value="<#?=$instrumentById->soundDescription?>"></textarea>
                            </div>

                        </div>
                        <div class="row">

                            <div class=" col">
                            <figure>
                                <figcaption>Ecouter l'extrait sonore :</figcaption>
                                <audio src="<#?=$instrumentById->soundDescription?>" preload="auto" ></audio>
                            </figure>

                                
                            </div>

                           <div class="custom-file  col">
                                <label class="custom-file-label" for="addSound">Ajouter un audio :</label>
                                <input type="file" class="custom-file-input w-100" id="addSound" lang="fr" name="addSound">
                                    
                            </div> 
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="updateInstrument"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">
            </div>
        
            
                
        


        </form>
        <a href="?p=addMusician">Musician</a>
        <a href="?p=addPicture">Picture</a>
        <a href="?p=addSound">Son</a>
        
    </div>
</body>

</html>