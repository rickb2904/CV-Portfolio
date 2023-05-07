function $(id) {
    return document.getElementById(id);
    }
    
    
function suivante(){
        document.images[I].style.display = "none" ;
            if ( I < Imax )
                        I++;
                    else
                        I=0;    
                        document.images[I].style.display = "block";
                        setTimeout(suivante, 2000) ;
                }
    
function affiche() {
  var div = document.getElementById("bouton");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
function affiche2() {
  var div = document.getElementById("bouton2");
  if (div.style.display === "none") {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}

function affiche2(){
    
    
    }
    

function changerCouleur(id, couleur)
{
  document.getElementById(id).style.color=couleur;
}

function changertheme(id)
{
  document.getElementById(id).style.fontSize = "30px";;
}

function changertheme3(id)
{
  document.getElementById(id).style.fontSize = "20px";;
}

function changertheme2(id)
{
  document.getElementById(id).style.fontSize = "10px";;
}


