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
    <title>Ajout Musicien</title>
</head>

<body>
    <?php
    var_dump($_FILES);
    var_dump($_POST);
    ?>
    <div class="vh-100 vw-100 d-flex justify-content-center align-items-center flex-column">
        <form class="article row g-3 " id="formAddInstrument" method="POST" width="" name="formAddArticle" enctype="multipart/form-data">
            <div style="">  
                       
            <div class="row">
                            <div class="form-group form-control col">
                                <label for="firstnameMusician" class="w-25">Prénom du musicien :</label>
                                <input type="text" class="w-100" aria-describedby="" name="firstnameMusician"></input>
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
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="addMusician"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">

            </form>
    </div>

</body>

</html>