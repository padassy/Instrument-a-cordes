var lien = document.querySelectorAll("a"); // Récupère tous les éléments <a> du document
function changerCouleurLien() {
   // Associe la fonction à l'événement onclick de chaque élément <a>
        this.classList.add = "active"; // Modifie la couleur du lien cliqué en rouge
      
    
  }
  lien.addEventListener("click", changerCouleurLien);