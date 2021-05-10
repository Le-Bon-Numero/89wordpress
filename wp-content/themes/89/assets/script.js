
// Cette fonction nous permet d'afficher / occulter le menu hamburger au clic

(function main() {
    // On cible notre menu et notre icone burger
    var burger = document.querySelector('#menu-burger');
    var headerNav = document.querySelector('.header-nav');
    
    // Au clic, on ajoute / enlève la class "open" sur nos éléments
    // Note : "toggle" retire une classe si elle est présente sur l'élément 
    // ou la rajoute si elle est absente
    var onClick = function onClick() {
        headerNav.classList.toggle('open');
        burger.classList.toggle('open');
    };
    
    // On "écoute" les événements sur notre icone "burger" (si ces éléments existent)
    if(burger && headerNav) {
        burger.addEventListener('click', onClick, false);
    }

})();
