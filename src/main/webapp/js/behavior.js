/* Inicio elementos tienda */
/* function productos(cantidad){
    
    
    var div_uno = document.createElement("div");
    div_uno.className ="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4";
    
    for (var i = 0; i < cantidad; i++) {    
        const div_dos = document.createElement("div");
        div_dos.className ="col";

        const div_tres = document.createElement("div");
        div_tres.className ="card roun ground";

        const div_cuatro = document.createElement("div");
        div_cuatro.className ="card-body";

        const div_cinco = document.createElement("div");
        div_cinco.className ="button-group text-center";

        const imagen = document.createElement("img");
        imagen.className ="card-img-top roun";
        imagen.src ="./img/producto"+((i%4)+1)+".jpg";        

        const h2_1 = document.createElement("h5");
        h2_1.className ="card-title text-center fuente-sm";
        h2_1.textContent = "Panel 5";

        const h2_2 = document.createElement("h6");
        h2_2.className ="text-center fuente-sm";
        h2_2.textContent = "Precio: $380.000";

        const btn_carro = document.createElement("button");
        btn_carro.className ="btn btn-sm btn-secondary me-1";
        btn_carro.textContent = "Añadir";

        const btn_deseo = document.createElement("button");
        btn_deseo.className ="btn btn-sm btn-success ms-1";
        btn_deseo.textContent = "Deseos";

        div_cinco.appendChild(btn_carro);
        div_cinco.appendChild(btn_deseo);

        div_cuatro.appendChild(h2_1);
        div_cuatro.appendChild(h2_2);
        div_cuatro.appendChild(div_cinco);

        div_tres.appendChild(imagen);
        div_tres.appendChild(div_cuatro);

        div_dos.appendChild(div_tres);

        div_uno.appendChild(div_dos);
        var contenedor = document.getElementById("contaner");
        contenedor.appendChild(div_uno);
    }
} */
/* Fin elementos tienda */

/* Inicio modales */
/* function modales(){
    document.getElementById('modales').style.display = 'block';
    const modal_uno = document.createElement("div");
    modal_uno.className ="modal fade centro";
    modal_uno.id = "desarrolladores";

    const modal_dos = document.createElement("div");
    modal_dos.className ="modal-dialog";

    const modal_tres = document.createElement("div");
    modal_tres.className ="modal-content";

    const modal_cuatro = document.createElement("div");
    modal_cuatro.className ="modal-header";

    const modal_cinco = document.createElement("div");
    modal_cinco.className ="modal-body";

    const h5 = document.createElement("h5");
    h5.className ="modal-title";
    h5.id = "exampleModalLabel";
    h5.textContent = "DESARROLLADORES";

    const btn_cerrar = document.createElement("button");
    btn_cerrar.className ="btn btn-close";
    btn_cerrar.data-bs-dismiss("modal"); 
    btn_cerrar.aria-Label("Close");

    const imagen = document.createElement("img");
    imagen.src ="./img/cedagro.jpg";
    imagen.width = "100%";
    imagen.alt = "cedagro";

    const p = document.createElement("p");
    p.align = "center";
    p.textContent = "<b>TRABAJO DESARROLLADO COMO EVIDENCIA PARA EL PROGRAMA ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACIÓN DEL SENA<BR>POR BRAYAN STIVEN MAHECHA GALINDO<br>&<br>JUAN CAMILO BOCANEGRA OSORIO</BR>2021</b>";

    modal_cuatro.appendChild(h5);
    modal_cuatro.appendChild(btn_cerrar);

    modal_cuatro.appendChild(imagen5);
    modal_cuatro.appendChild(p);

    modal_tres.appendChild(modal_cuatro);
    modal_tres.appendChild(modal_cinco);

    modal_dos.appendChild(modal_tres);

    modal_uno.appendChild(modal_dos);
    var contenedor = document.body.appendChild(modal_uno);
} */
/* Fin modales */

/* Ocultar */
function ocultar(){
    document.getElementById("contenedor").className = "container d-none";
}
function mostrar(){
    if(document.getElementById("dato_cedula").value==""){
        alert("error");
    }
}
function cancelar(){
    document.getElementById("contenedor").className = "container";
}
/* Fin ocultar */