<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Ajout Audio</title>
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
            <h1 class="mb-5">Ajouter un audio</h1>
            <form class="article row g-3 w-100" id="formAddSound" method="POST" width="" name="formAddSound" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group form-control col ">
                        <label for="idInstrument">Instrument :</label>
                        <select name="idInstrument" class=" w-100 form-select" id="idInstrument" value="" required>
                            <option></option>
                            <?php
                            if (isset($dataInstrumentAdminAdd)) :
                                foreach ($dataInstrumentAdminAdd as $item) :

                            ?>
                                    <option value="<?= $item->id ?>"> <?= $item->title ?></option>
                            <?php
                                endforeach;
                            endif;


                            ?>

                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group form-control col">
                        <label for="titleSound" class="">Titre du son :</label>
                        <input type="text" class="w-100" aria-describedby="" name="titleSound"></input>
                    </div>

                </div>
                <div class="row">

                    <div class="form-group form-control col">
                        <label for="descriptionSound w-25" class="">Description :</label>
                        <textarea type="text" class="w-100" aria-describedby="" name="descriptionSound" rows="3"></textarea>
                    </div>






                </div>
                <div class="row">

                    <div class="custom-file  col">
                        <label class="custom-file-label" for="sound">Ajouter un audio :</label>
                        <input type="file" class="custom-file-input w-100" id="sound" lang="fr" name="sound">

                    </div>

                </div>
                <input class="btn btn-secondary  w-25 mx-auto" type="submit" value="Envoyer" name="addSound"></input>
                <input class="btn btn-danger w-25 mx-auto" type="reset" value="Reset">

        </div>



        </form>
    </div>
    <table class="table table-striped">


        <tr>

            <th width="15%">Titre</th>
            <th width="10%">Audio</th>
            <th width="55%">Description</th>
            <th width="20%"></th>

        </tr>
        <?php
        if (isset($sounds)) :
            foreach ($sounds as $item) :

        ?>
                <tr>

                    <td>
                        <h2><?= $item->soundName ?></h2>
                    </td>
                    <td>
                        <h2><?= $item->soundDescription ?></h2>
                    </td>
                    <td>
                        <p><audio controls src="<?= $item->sound ?>"></audio></p>
                    </td>
                    <td>
                        <a href="?idSoundUpdate=<?= $item->idSound ?>" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>Modifier</a>
                        <a class="btn btn-outline-danger" onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer<?= $item->soundName ?>'); if(a){ document.location = '?idSoundDelete=<?=$item->idSound?>'; };" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>Supprimer</a>

                    </td>
                </tr>
            <?php
            endforeach;
        else :
            ?>
            <tr>
                <h1 id="messageErreurPrivateAdmin">Un problème est survenu, veuillez recommencer</h1>
            </tr>

        <?php
        endif;
        ?>
    </table>
    </div>
    <script src="js/script.js"></script>

</body>

</html>