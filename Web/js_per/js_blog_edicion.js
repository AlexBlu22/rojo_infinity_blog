var cont = 5;
var contID = 1;

window.onload = function (){
    document.getElementById("buttonEtiquetasMas").addEventListener("click",anadirEtiqueta);
}

function anadirEtiqueta(evento){

//    document.getElementById('divEtiquetas').innerHTML += '<div class="col-md-3"><select class="form-select col-md-1" id="validationCustom0'+cont+'" required><option selected disabled value="">Choose...</option><option>...</option></select></div>';
    
    var div = document.createElement("div");
    document.getElementById("divButtonEtiMas").remove();
    if(document.getElementById("divButtonEtiMenos") !=null)
        document.getElementById("divButtonEtiMenos").remove();

    div.setAttribute("class","col-md-3");
    contID++;
    let idDiv = "divIDSelector"+contID;
    div.setAttribute("id",idDiv);
    div.innerHTML = '<select class="form-select col-md-1" id="validationCustom0'+cont+'" required><option selected disabled value="">'+
                        'Elegir...</option>            <option>Competiciones esports</option><option>Estrategia</option>'+
                        '<option>Eventos esports</option><option>Competitivo</option><option>League of Legends</option>'+
                        '<option>Shooters</option><option>Streaming</option><option>Fornite</option><option>Consolas</option></select>';
    document.getElementById('divEtiquetas').appendChild(div);

    crearBotonMas();
    crearBotonMenos();

    cont++;
}

function crearBotones(){

        //Boton +
        var div2 = document.createElement("div");
        div2.setAttribute("class","col-md-3");
        div2.setAttribute("id","divButtonEtiMas");
        div2.innerHTML = '<button type="button" id="buttonEtiquetasMas">+</button>';
        document.getElementById('divEtiquetas').appendChild(div2);
        document.getElementById("buttonEtiquetasMas").addEventListener("click",anadirEtiqueta);
        //Boton -
        var div3 = document.createElement("div");
        div3.setAttribute("class","col-md-3");
        div3.setAttribute("id","divButtonEtiMenos");
        div3.innerHTML = '<button type="button" id="buttonEtiquetasMenos">-</button>';
        document.getElementById('divEtiquetas').appendChild(div3);
        document.getElementById("buttonEtiquetasMenos").addEventListener("click",quitarEtiqueta);

}

function crearBotonMas(){
    
    var div2 = document.createElement("div");
    div2.setAttribute("class","col-md-1");
    div2.setAttribute("id","divButtonEtiMas");
    div2.innerHTML = '<button class="btn btn-primary" type="button" id="buttonEtiquetasMas">+</button>';
    document.getElementById('divEtiquetas').appendChild(div2);
    document.getElementById("buttonEtiquetasMas").addEventListener("click",anadirEtiqueta);

}

function crearBotonMenos(){
    
    var div3 = document.createElement("div");
    div3.setAttribute("class","col-md-1");
    div3.setAttribute("id","divButtonEtiMenos");
    div3.innerHTML = '<button class="btn btn-primary" type="button" id="buttonEtiquetasMenos">-</button>';
    document.getElementById('divEtiquetas').appendChild(div3);
    document.getElementById("buttonEtiquetasMenos").addEventListener("click",quitarEtiqueta);
}

function quitarEtiqueta(evento){

    document.getElementById("divButtonEtiMas").remove();
    document.getElementById("divButtonEtiMenos").remove();
    let idDiv = "divIDSelector"+contID;
    document.getElementById(idDiv).remove();

    crearBotonMas();

    if(contID!=1){
        crearBotonMenos();
    }

    contID--;
}