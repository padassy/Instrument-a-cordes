var lien = document.querySelectorAll(".nav-link"); // Récupère tous les éléments <a> du document
function changerCouleurLien() {
      for (let i = 0; i < lien.length; i++) {
        lien[i].classList.add = "active"; 
      }
    
  }
  lien.addEventListener("click", changerCouleurLien);