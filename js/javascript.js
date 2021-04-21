var modal = document.getElementById("myModal");
var Update = document.getElementById("myUpdate");
var Supp = document.getElementById("mySupp"); //=> attribut 
var blur = document.getElementsByClassName("blurfilter");
var btn = document.querySelector("#icone_ajouter");
var editBtna = document.querySelectorAll(".editBtna");
var editBtnaemp = document.querySelectorAll(".editBtnaemp"); //=>selecteur

editBtnaemp
var supptBtna = document.querySelectorAll(".supptBtna");
var cancel = document.getElementById("cancel");
//var btn1 = document.getElementsByClassName("icone_update");
//var btn2 = document.querySelector("#icone_supp");



//insert_produit_______________________________________________________________________________________
btn.onclick = function() {
    modal.style.display = "block";
    document.getElementById("blurfilter").style.filter = "blur(5px)";
};

function close_insert() {
    modal.style.display = "none";
    document.getElementById("blurfilter").style.filter = "none";

};



//update_produit_______________________________________________________________________________________

editBtna.forEach((e) => {

    e.onclick = function() {
        Update.style.display = "block";
        document.getElementById("blurfilter").style.filter = "blur(5px)";
        tr = this.parentElement.parentElement;
        var pr_id = tr.children[1].innerHTML;
        var inpNom = tr.children[2].innerHTML;
        var inpBrand = tr.children[3].innerHTML;
        var inpUnite = tr.children[4].innerHTML;
        var inpQuantite = tr.children[5].innerHTML;
        var inpSeriale = tr.children[6].innerHTML;
        var inpCategorie = tr.children[7].innerHTML;
        var inpImage = tr.children[0].firstElementChild.src;
        document.querySelector("#id1").value = pr_id;
        document.querySelector("#Nom1").value = inpNom;
        document.querySelector("#brand1").value = inpBrand;
        document.querySelector("#Unite1").value = inpUnite;
        document.querySelector("#Quantite1").value = inpQuantite;
        document.querySelector("#Seriale1").value = inpSeriale;
        document.querySelector("#Categorie1").value = inpCategorie;
        document.querySelector("#image1").src = inpImage;











    };
});



//update_Employee_______________________________________________________________________________________

editBtnaemp.forEach((e) => {

    e.onclick = function() {
        Update.style.display = "block";
        document.getElementById("blurfilter").style.filter = "blur(5px)";
        tr = this.parentElement.parentElement;
        var pr_id = tr.children[1].innerHTML;
        var inpCin = tr.children[2].innerHTML;
        var inpNom = tr.children[3].innerHTML;
        var inpPren = tr.children[4].innerHTML;
        var inpImage = tr.children[0].firstElementChild.src;


        document.querySelector("#id1").value = pr_id;
        document.querySelector("#CIN1").value = inpCin;
        document.querySelector("#Nom1").value = inpNom;
        document.querySelector("#Prenom1").value = inpPren;
        document.querySelector("#image1").src = inpImage;











    };
});

function close_Update() {
    Update.style.display = "none";
    document.getElementById("blurfilter").style.filter = "none";


};

/*btn2.onclick = function() {
Supp.style.display = "block";
document.getElementById("blurfilter").style.filter = "blur(5px)";
};*/

//supp_produit____________________________________________________________________________________________

supptBtna.forEach((e) => {

    e.onclick = function() {
        Supp.style.display = "block";
        document.getElementById("blurfilter").style.filter = "blur(5px)";
        tr = this.parentElement.parentElement;
        var pr_id = tr.children[1].innerHTML;
        document.querySelector("#id2").value = pr_id;
    };
});



function close_supp() {
    Supp.style.display = "none";
    document.getElementById("blurfilter").style.filter = "none";

};
//cancel_supp
/*cancel.onclick = function() {
        Supp.style.display = "none";
        document.getElementById("blurfilter").style.filter = "none";
    } */
//window close_______________________________________________________________________________________________________
window.onclick = function(event) {
    if (event.target == modal || event.target == Update || event.target == Supp) {
        modal.style.display = "none";
        Update.style.display = "none";
        Supp.style.display = "none";
        document.getElementById("blurfilter").style.filter = "none";




    }
};

//_________________________________________________________________________________________________________




/*function valider_Email() {
    var loginx = document.getElementById("CIN").value;
    var passw = document.getElementById("Pass").value;

    if (loginx == "" || passw == "") {
        alert("le champ doit remplie");
    }



}
*/
//_______________________________________Regular_Exepression_________________________________
//_______________________________________Regexp__________________________________________

/*

g========> Recherche toutes les correspondance  -> Recherche globale -> sans g  s'arrêter après le premier match

i========> effectuer une corresspondance insensible à la casse -> aucun différence entre le majuscile et le muniscule

m========> effectuer une corresspondance multiligne -> plusieur ligne 


////////////////////////////___Brackets___////////////////////////////////////////////////

Les crochets sont utilisés pour rechercher une plage de caractères:

[....] character
[^...]  Not character
[a-e] Range -> du  a à e
[a-z] range small letters
[A-Z] range capital letters
[0-9] range  Numbers
[^0-9] not range
[A-g] =range [A-Z] range [a-g]
[0-9a-z] double range 
(x|y) Trouver l'une des alternatives spécifiées


/////////////////////////////__Quantifiers__/////////////////////


Letter+ ===> work contain one lettre 

letter {number}====> word contain number 
lettre {number,number} ====> word contain number or number
lettre {number,} ====> word contain least number




*/
function regex() {
    var loginx = document.getElementById("CIN").value;
    var ECIN = document.getElementById("ECIN");

    if (!/^[A-Z]{1,2}[0-9]/.test(loginx)) {

        ECIN.innerHTML = "<br> erreur de CIN ";
        ECIN.style.color = "red";
        ECIN.style.fontSize = "20px"

    } else {

        ECIN.innerHTML = "";
    }

}

var sumb = document.getElementsByClassName("sumbit");
var Nom = document.getElementById("Nom").value;
var brand = document.getElementById("brand").value;
var Unite = document.getElementById("brand").value;
var Quantite = document.getElementById("Quantite").value;
var Seriale = document.getElementById("Seriale").value;
var Categorie = document.getElementById("Categorie").value;

sumb.onclick = function() {

    if (!/^[A-Z][^0-9]/.test(Nom)) {

        alert("erreur de syntax nom ")

    }

    if (!/^\w+$/.test(brand)) {

        alert("erreur de syntax Brand ")

    }

    if (!/^\d+$/.test(Unite)) {

        alert("erreur de syntax Unite ")

    }
    if (!/^\d+$/.test(Quantite)) {

        alert("erreur de syntax Quantite ")

    }
    if (!/^\d+$/.test(Seriale)) {

        alert("erreur de syntax Seriale ")

    }

    if (!/^\w+$/.test(Categorie)) {

        alert("erreur de syntax Categorie ")

    }

}

// if (!/^\w+$/.test(brand.value)) {
//     showError("Invalid Brand");
//     return;
//   }