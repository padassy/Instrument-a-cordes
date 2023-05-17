<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Adminstration</title>
</head>

<body>
    <style>
        p{
            height: fit-content;
            max-height: 20vh;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
    <?php
    require_once "../publicView/src/error.php";

    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 m-auto mb-5 mt-1">
        <div class="container-fluid">
            <button class="btn btn-dark" type="submit"><a href="?p=addInstrument" class=" link-light">Nouvel Article</a></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Autre contenu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?p=addMusician">Nouvel artiste</a></li>
                            <li><a class="dropdown-item" href="?p=addPicture">Nouvel image</a></li>
                            <li><a class="dropdown-item" href="?p=addSound">Nouveau son</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="boxLogo m-auto" style="width: 200px; height: 150px;">
                    <img src="../public/assets/logo.png" alt="" class="h-100 ">
                </div>
                <form class="d-flex" role="search"  method = "get" >
                    <button class="btn btn-outline-success" type="submit" name="submitSearch" value="submitSearch">Search</button>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="terme">
                </form>
                <button type="button" class="btn btn-primary"><a href="?disconnect" class="link-light">Se Déconnecter</a></button>
            </div>
        </div>
    </nav>




    
    <?php
        if (isset($resultSearchObj)) :
            foreach ($resultSearchObj as $item) :
                if(isset($item->idInstrument)):
                    ?>

<table class="table table-striped mt-5">
<tr>
    
            <th width="10%">Titre</th>
            <th width="45%">Intro</th>
            <th width="45%" >Description</th>
            <th></th>
        
            

        </tr>
                <tr>

                    <td>
                    <?php if (isset($item->title)) : ?>
                        <h2><?= $item->title ?></h2>
                        <?php endif; ?>
                    </td>
                    <td>
                    <?php if (isset($item->intro)) : ?>
                        <p><?= $item->intro ?></p>
                        <?php endif; ?>
                        
                    </td >
                    <td colspan="2">
                    <?php if (isset($item->description)) : ?>
                        <p><?= $item->description ?></p>
                        <?php endif; ?>
                    </td>
                    <td></td>
        
                </tr>
                <tr>
                    
                    <th width="30%">Histoire</th>
                    <th width="30%">Technique</th>
                    <th width="20%">Date</th>
                    <th width="20%"></th>
                    
                </tr>
                <tr>
                <td>
                    <?php if (isset($item->history)) : ?>
                        <p><?= $item->history ?></p>
                        <?php endif; ?>
                    </td>
                   <td>
                    <?php if (isset($item->technics)) : ?>
                        <p><?= $item->technics ?></p>
                        <?php endif; ?>
                        <td>
                    
                        <?php if (isset($item->dateArticle)) : ?>
                        <p><?= $item->dateArticle ?></p>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="?idInstrumentUpdate=<?= $item->idInstrument ?>" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>Aller à l'article</a>
                    </td>

                </tr>
</table>
            <?php
                endif;
                if(isset($item->idMusician)):
                ?>
                <table class="table table-striped mt-5">
            <tr>

            <th width="10%">Nom</th>
            <th width="10%">Prénom</th>
            <th width="20%">Date de naissance</th>
            <th width="20%">Date de décès</th>
            <th width="20%">Biographie</th>
            <th width="20%"></th>

            </tr>

                <tr>
                    
                    <td>
                        <h2><?= $item->musicianFirstname ?></h2>
                    </td>
                    <td>
                        <h2><?= $item->musicianLastname ?></h2>
                    </td>
                    <td>
                        <h2><?=$item->musicianBorn?></h2>
                    </td>
                    <td>
                        <?php
                        if(!empty($item->musicianDeath)):
                            ?>
                        <h2><?=$item->musicianDeath?></h2>
                        <?php
                        else:
                        ?>
                        <h2>En vie </h2>
                        <?php
                        endif;
                        ?>
                    </td>
                    <td>
                        <p><?= $item->musicianBio ?></p>
                    </td>
                    <td>
                        <a href="?idMusicianUpdate=<?= $item->idMusician ?>" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>Modifier</a>
                    </td>
                </tr>
                </table>
                <?php
                endif;
                if(isset($item->idPicture)):
                ?>
                <table class="table table-striped mt-5">
                <tr>

                    <th width="15%">Image</th>
                    <th width="30%">Titre</th>
                    <th width="20%">Description</th>
                    <th width="10%">Date de prise</th>
                    <th width="10%">Date d'ajout</th>
                    <th width="15%"></th>

                </tr>
                <tr>

                    <td>
                        <?php if (isset($item->pictureMini)) : ?>
                            <img src="<?= $item->pictureMini ?>" width="100%" alt="">
                        <?php endif; ?>
                    </td>
                    <td>
                        <h2><?= $item->pictureName ?></h2>
                    </td>
                    <td>
                        <p><?= $item->pictureDescription ?></p>
                    </td>
                    <td>
                        <p><?= $item->pictureDate ?></p>
                    </td>
                    <td>
                        <p><?= $item->pictureDateFetch ?></p>
                    </td>
                    <td>
                        <a href="?idPictureUpdate=<?= $item->idPicture ?>" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>Modifier</a>
                    </td>
                </tr>
                </table>
                <?php
                endif;
                if(isset($item->idSound)):
                ?>
                <table class="table table-striped mt-5">
                <tr>

                    <th width="15%">Titre</th>
                    <th width="10%">Audio</th>
                    <th width="55%">Description</th>
                    <th width="20%"></th>

                </tr>
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
                </table>


        <?php 
        endif;
            endforeach;
        else :
            ?>
            <table class="table table-striped mt-5">
            <tr>
                <h1 id="messageErreurPrivateAdmin">Un problème est survenu, veuillez recommencer</h1>
            </tr>

        <?php
        endif;
        ?>
    </table>
    </div>
</body>

</html>