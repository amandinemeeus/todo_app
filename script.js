//AFFICHER_MASQUER

var rajouter = document.getElementById('add');
var contenu1 = document.getElementById('contenu1');
var contenu2 = document.getElementById('contenu2');
var x = true;
rajouter.addEventListener('click',changeContenu);

function changeContenu() {
if(x == true) {
contenu1.style.display = 'none';
contenu2.style.display = 'flex';
x = false;
} else {
contenu1.style.display = 'flex';
contenu2.style.display = 'none';
rajouter.style.transform = 'rotate(0deg)';
x = true;
}
}

var rajouter = document.getElementById('close');
var contenu1 = document.getElementById('contenu1');
var contenu2 = document.getElementById('contenu2');
var x = true;
rajouter.addEventListener('click',changeContenu);



// CONNECT TO DATABASE
