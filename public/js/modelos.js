//script en ajax para cargar los modelos relacionados
//con la marca.

function cargarModelosXML(){

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            modelos(this);
        }
    };
    xhttp.open("GET", "https://sakali.oo/cargarmodelos", true);
    xhttp.send();

}

function modelos(xml){

    var i;
    var xmlDoc = xml.responseXML;
    var modelos = xmlDoc.getElementsByTagName('modelo');
    var seleccionado = document.getElementById('marca').value;
    var salida = "";

    for(i = 0; i < modelos.length; i++){

       if(modelos[i].getElementsByTagName('id_marca')[0].childNodes[0].nodeValue == seleccionado){

            salida += "<option>" + modelos[i].getElementsByTagName('nombre')[0].childNodes[0].nodeValue + "</option>";

        }
    }

   document.getElementById('modelos').innerHTML = salida;

}

window.onload =  document.getElementById('marca').setAttribute('onchange', 'cargarModelosXML();');
