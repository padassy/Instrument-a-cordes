<header class="header-mobile">
    <img class="img-mobil-nav" src="assets/fond-mobile.png" alt="">
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn">
        <span></span>
    </label>
    <label for="active" class="close">
    </label>
    <div class="wrapper">
        <ul>
            <li>
                <a href="./">ACCUEIL</a>
            </li>
            <li>
                <a href="?p=article">ARTICLE</a>
            </li>
            <li>
                <a href="?p=contact">CONTACT</a>
            </li>
            <li>
            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADMIN</a>
            </li>
        </ul>
    </div>
</header>
<div class="header-div-tablet">
    <header class="header-tablet">
        <div class="nav-div-desktop">
            <div class="logo-main">
                <img src="assets/logo.png" alt="">
            </div>
            <nav class="nav-desktop">
                <a class="titre-menu-tab" href="./">ACCUEIL</a>
                <a href="?p=article">ARTICLE</a> 
                <a href="?p=contact">CONTACT</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADMIN</a>
            </nav>
        </div>
    </header>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Connexion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="" method="POST" id="contactForm">
                <label for="userLogin">Login :</label>
                <input type="text" name="userLogin" required>
                <label for="userPassword">Mot de passe :</label>
                <input type="password" name="userPassword" required>
                <input type="checkbox" placeholder="Rester connecter">
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light">Se connecter</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                
            </form>
            </div>

    </div>
  </div>
</div>