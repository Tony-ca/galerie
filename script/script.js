const dropMenu = document.querySelectorAll('#dropMenu');
const dropMenu2 = document.querySelectorAll('#dropMenu2');
const dropMenu3 = document.querySelectorAll('#dropMenu3');

const dropMenuTab = document.querySelectorAll('#dropMenuTab');
const dropMenuTab2 = document.querySelectorAll('#dropMenuTab2');
const dropMenuTab3 = document.querySelectorAll('#dropMenuTab3');

const boutonMenu = document.querySelector('#bouton-menu');

const sextoys = document.querySelectorAll('#sextoys');
const cosmetique = document.querySelectorAll('#cosmetique');
const lingerie = document.querySelectorAll('#lingerie');

const barreNavBurger = document.querySelectorAll('.barreNavBurger');

const search = document.querySelectorAll('.search')

const barreDeRecherche = document.getElementById("barreDeRecherche");
const RechercheLoupe = document.getElementById("RechercheLoupe");


const message = document.getElementById("messageId");


    
let barreDeRechercheOuvert = false;

let menuOuvert = false

document.body.style.backgroundColor = 'rgb(254, 225, 255)';



function overDropMenu() {
    dropMenu.forEach(dropMenu => {
        dropMenu.style.display = 'flex';
    });
    dropMenu2.forEach(dropMenu2 => {
        dropMenu2.style.display = 'none';
    });
    dropMenu3.forEach(dropMenu3 => {
        dropMenu3.style.display = 'none';
    });
    sextoys.forEach(sextoys => {
        sextoys.style.backgroundColor = 'rgb(239, 126, 243)'
    });
    cosmetique.forEach(cosmetique => {
        cosmetique.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    lingerie.forEach(lingerie => {
        lingerie.style.backgroundColor = 'rgb(254, 225, 255)'
    });
}
function overDropMenu2() {
    dropMenu.forEach(dropMenu => {
        dropMenu.style.display = 'none' ;
    });
    dropMenu2.forEach(dropMenu2 => {
        dropMenu2.style.display = 'flex';
    });
    dropMenu3.forEach(dropMenu3 => {
        dropMenu3.style.display = 'none';
    });
    sextoys.forEach(sextoys => {
        sextoys.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    cosmetique.forEach(cosmetique => {
        cosmetique.style.backgroundColor = 'rgb(239, 126, 243)'
    });
    lingerie.forEach(lingerie => {
        lingerie.style.backgroundColor = 'rgb(254, 225, 255)'
    });
}
function overDropMenu3() {
   
    dropMenu.forEach(dropMenu => {
        dropMenu.style.display = 'none' ;
    });
    dropMenu2.forEach(dropMenu2 => {
        dropMenu2.style.display = 'none' ;
    });
    dropMenu3.forEach(dropMenu3 => {
        dropMenu3.style.display = 'flex';
    });
    sextoys.forEach(sextoys => {
        sextoys.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    cosmetique.forEach(cosmetique => {
        cosmetique.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    lingerie.forEach(lingerie => {
        lingerie.style.backgroundColor = 'rgb(239, 126, 243)'
    });
    
    
}
function dropMenuClose() {
    dropMenu.forEach(dropMenu => {
        dropMenu.style.display = 'none' ;
    });
    dropMenu2.forEach(dropMenu2 => {
        dropMenu2.style.display = 'none';
    });
    dropMenu3.forEach(dropMenu3 => {
        dropMenu3.style.display = 'none';
    });
    sextoys.forEach(sextoys => {
        sextoys.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    cosmetique.forEach(cosmetique => {
        cosmetique.style.backgroundColor = 'rgb(254, 225, 255)'
    });
    lingerie.forEach(lingerie => {
        lingerie.style.backgroundColor = 'rgb(254, 225, 255)'
    });
}







boutonMenu.addEventListener('click', toggleMenu);


function toggleMenu() {
    if (!menuOuvert) {
        menuOuvert = true;
        barreNavBurger.forEach(barreNavBurger => {
            barreNavBurger.style.display = 'flex';
        });
       
    } else {
        
        menuOuvert = false;

        barreNavBurger.forEach(barreNavBurger => {
            barreNavBurger.style.display = 'none';
        });
        dropMenuTab.forEach(dropMenuTab => {
            dropMenuTab.style.display = 'none';
        });
        dropMenuTab2.forEach(dropMenuTab2 => {
            dropMenuTab2.style.display = 'none';
        });
        dropMenuTab3.forEach(dropMenuTab3 => {
            dropMenuTab3.style.display = 'none';
        });
        
        
    }
}





function DropMenuTab() {
    dropMenuTab.forEach(dropMenuTab => {
        dropMenuTab.style.display = 'flex';
    });
    dropMenuTab2.forEach(dropMenuTab2 => {
        dropMenuTab2.style.display = 'none';
    });
    dropMenuTab3.forEach(dropMenuTab3 => {
        dropMenuTab3.style.display = 'none';
    });
}
function DropMenuTab2() {
    dropMenuTab.forEach(dropMenuTab => {
        dropMenuTab.style.display = 'none' ;
    });
    dropMenuTab2.forEach(dropMenuTab2 => {
        dropMenuTab2.style.display = 'flex';
    });
    dropMenuTab3.forEach(dropMenuTab3 => {
        dropMenuTab3.style.display = 'none';
    });
}
function DropMenuTab3() {
    dropMenuTab.forEach(dropMenuTab => {
        dropMenuTab.style.display = 'none' ;
    });
    dropMenuTab2.forEach(dropMenuTab2 => {
        dropMenuTab2.style.display = 'none' ;
    });
    dropMenuTab3.forEach(dropMenuTab3 => {
        dropMenuTab3.style.display = 'flex';
    });


}


RechercheLoupe.addEventListener("click", function() {
    if (barreDeRecherche.style.display === "none") {
        barreDeRecherche.style.display = "block";
    } else {
        barreDeRecherche.style.display = "none";
        
    }
});

function autoResize(textarea) {
    textarea.style.height = (textarea.scrollHeight) + "px"; // Ajuste la hauteur en fonction du contenu
}










    


