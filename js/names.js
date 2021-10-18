var nombres = {
    "Personas": [
        {"imagen" : "img/padrino.png",
         "nombre" : "El Padrino",
         "clasificacion" : "C (Películas para mayores de 15 años).",
         "tipo" : "Trallock Basic.",
         "horario" : "(4:55 p.m)(9.00 p.m.)(10:10 p.m.)"},

        {"imagen" : "img/psicosis.png",
        "nombre" : "Psicosis",
        "clasificacion" : "C (Películas para mayores de 15 años).",
        "tipo" : " Cuvex",
        "horario" : "(1:30 p.m)(2:35 p.m.)(3:45 p.m.)(6:00 p.m.)."},
        
        {"imagen" : "img/china.png",
        "nombre" : "Chinatown",
        "clasificacion" : "C (Películas para mayores de 15 años).",
        "tipo" : "Radom",
        "horario" : "(2:10 p.m.)(4:30 p.m.)(7:00 p.m.)   "},
        
        {"imagen" : "img/blade.png",
        "nombre" : "Blade Runner 2049",
        "clasificacion" : "C (Películas para mayores de 15 años).",
        "tipo" : "Radom",
        "horario" : "(2:40 p.m.)"},
        
        {"imagen" : "img/tiburon.png",
        "nombre" : "Tiburón",
        "clasificacion" : "C (Películas para mayores de 15 años).",
        "tipo" : "Trallock Basic.",
        "horario" : "(4:20 p.m.)(6:45 p.m.)(8:40 p.m.)"},
        
        {"imagen" : "img/galaxia.png",
        "nombre" : "La guerra de las galaxias. ",
        "clasificacion" : "C (Películas para mayores de 15 años).",
        "tipo" : "Cuvex",
        "horario" : "(2:50 p.m.)(5:20 p.m.)(9:30 p.m.)"},
    ]
};

//Obteniendo el elemento contenedor donde se cargarán
//todos los datos del objeto JSON
var div = document.getElementById("info");
div.innerHTML = volcarDatos(nombres.Personas);

function volcarDatos(datos){
    var total = datos.length;
    data = "<ul class=\"grid\">\n";
    for(var i=0; i<total; i++){
        data += "<li class=\"box\">\n"; 
        data += "<div class=\"box-shadow\"></div>\n";
        data += "<div class=\"box-gradient\">\n";
        data += "<img src=\"" + datos[i].imagen + "\" alt=\"Avatar de " + datos[i].nombre +" id=\"avatar\" width=\"170px\" height=\"120px\" />\n";
        data += "<h4>\nNombre: " + datos[i].nombre + " \n</h4>\n";
        data += "<p>\Clasificacion: " + datos[i].clasificacion + "\n<br />\n";
        data += "<p>\Tipo de butacas: " + datos[i].tipo + "\n<br />\n";
        data += "Horario: " + datos[i].horario + "\n</p>\n";
        data += "<a href='teststorage.html'>Comprar tickets</a>";
        data += "</div>\n";
        data += "</li>\n";

    }
    data += "</ul>\n";
    return data;
}