// MAX 2 MARGARETKY
var checks = document.querySelectorAll(".check");
var max = 2;
for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;
// MAX 2 PIGMENTY
var checks = document.querySelectorAll(".pigment");
var max = 2;
for (var i = 0; i < checks.length; i++)
    checks[i].onclick = pigmentCheck;

// SCHOVAJ OSTATNE KVETY
var images = document.getElementsByClassName('kvet');
for (i = 0; i < images.length; i++) {
    console.log("schovane")
    images[i].style.display = "none";
}
// document.getElementById("ruzova-margaretka").style.display = 'block';


function selectiveCheck(event) {
    var checkedChecks = document.querySelectorAll(".check:checked");
    if (checkedChecks.length >= max + 1)
        return false;
}

function pigmentCheck(event) {
    var checkedChecks = document.querySelectorAll(".pigment:checked");
    if (checkedChecks.length >= max + 1)
        return false;
}

function nameValidation() {
    var name = document.getElementById("name").value;
    if (name.length < 3) {
        document.getElementById("nameHelp").innerHTML = "Toto pole musí obsahovať viac ako 2 znaky";
    } else {
        document.getElementById("nameHelp").innerHTML = "";
    }

}

function surnameValidation() {
    var name = document.getElementById("surname").value;
    if (name.length < 3) {
        document.getElementById("surHelp").innerHTML = "Toto pole musí obsahovať viac ako 2 znaky";
    } else {
        document.getElementById("surHelp").innerHTML = "";
    }

}

function emailValidation() {
    var email = document.getElementById("email");
    var regex = new RegExp("^[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,4}|[.]{1}[a-zA-Z]{2,4}[.]{1}[a-zA-Z]{2,4})$");
    email.setCustomValidity("");

    if (regex.test(email.value) == false) {
        document.getElementById("emailHelp").innerHTML = "Email je neplatný, mail musí obsahovať minimálne 3 písmena pred a za @ + doména musí byť v rozsahu 2-4 písmená ";
    } else {
        document.getElementById("emailHelp").innerHTML = "Email je platný";
    }
}

function showDesign() {
    if(document.getElementById("ownDesign").style.display == 'block'){
        document.getElementById("ownDesign").style.display = 'none';
    }
    else{
        document.getElementById("ownDesign").style.display = 'block';
    }

}

function showText() {
    document.getElementById("textKlucenka").style.display = 'block';
    document.getElementById("upozornenieText").style.display = 'block';
}

function hideText() {
    document.getElementById("textKlucenka").value = '';
    document.getElementById("textKlucenka").style.display = 'none';
    document.getElementById("upozornenieText").style.display = 'none';
}

function controlText() {
    console.log("som tu");
    if (document.getElementById("textKlucenka").value.length > 7) {
        console.log("som tu v ife");

        document.getElementById("klucenkaHelp").innerHTML = "Toto pole môže obsahovať maximálne 7 znakov";
    } else {
        console.log("som tu v else");

        document.getElementById("klucenkaHelp").innerHTML = "";

    }
}

function changeImage(farba) {
    // SCHOVAJ OSTATNE KVETY
    var images = document.getElementsByClassName('kvet');
    for (i = 0; i < images.length; i++) {
      
        images[i].style.display = "none";
    }
    if (farba == 'zlta') {
        document.getElementById("zlta-margaretka").style.display = 'block';

    }
    else if (farba == 'biela') {
        document.getElementById("biela-margaretka").style.display = 'block';
    }
    else if (farba == 'bledoruzova') {
        document.getElementById("bledoruzova-margaretka").style.display = 'block';
    }

    else if (farba == 'cervena') {
        document.getElementById("cervena-margaretka").style.display = 'block';
    }

    else if (farba == 'tyrkys') {
        document.getElementById("tyrkysova-margaretka").style.display = 'block';
    }

    else if (farba == 'modra') {
        document.getElementById("modra-margaretka").style.display = 'block';
    }

    else if (farba == 'ruzova') {
        document.getElementById("ruzova-margaretka").style.display = 'block';
    }

    else if (farba == 'zelena') {
        document.getElementById("zelena-margaretka").style.display = 'block';
    }


}