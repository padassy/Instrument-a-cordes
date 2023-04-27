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
    <form action="" method="POST">
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

            </form>


</body>

</html>