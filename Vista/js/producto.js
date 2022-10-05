/**************************************/
/************* CARRITO ****************/
/**************************************/

function sumarCarrito(){
    let tabla, fila, celda0, celda1, celda2, celda3, celda4;
	tabla = document.getElementById("lista__carrito");
    fila = tabla.insertRow(tabla.rows.length);
    celda0=fila.insertCell(0);
    celda1=fila.insertCell(1);
	celda2=fila.insertCell(2);
	celda3=fila.insertCell(3);
	celda4=fila.insertCell(4);
    celda0.innerHTML="<img src='"+arrayDatosProducto[0]+"'>";
    celda1.innerHTML=arrayDatosProducto[1];
    celda2.innerHTML=arrayDatosProducto[2];
    celda3.innerHTML=arrayDatosProducto[3];
    celda4.innerHTML="<a href='#' onclick='borrarProducto(this.parentNode.parentNode.rowIndex); contadorCarrito()'>Eliminar</a>";
    alert("El producto se sumo correctamente al carrito!");
    cerrarDetalle();
    sumCompra();
}

function borrarProducto(numero){
    let tabla=document.getElementById("lista__carrito");		
    tabla.deleteRow(numero);
    alert("Producto eliminado!");
    sumCompra();
}

function abrirCarrito(){
    let carritoPopUp;
    carritoPopUp = document.getElementById("carrito");
    carritoPopUp.style = "display: flex;"
}

function cerrarCarrito(){
    let carritoPopUp;
    carritoPopUp = document.getElementById("carrito");
    carritoPopUp.style = "display: none;"
}

function sumCompra(){
    let totalCompra, sumaTot, tabla
    tabla = document.getElementById("lista__carrito");
    totalCompra = document.getElementById("total-Compra");
    sumaTot = 0;
    for (i = 1; i < tabla.rows.length; i++){
        sumaTot += parseInt(tabla.rows[i].cells[3].innerHTML);
    }
    totalCompra.innerHTML ="Precio Total: $ "+sumaTot;
}


/**************************************/
/************* DETALLE ****************/
/**************************************/
var arrayDatosProducto = [];

function verDetalle(datos){
    let detallePopUp, imagen, nombre, descripcion, precio;
    detallePopUp = document.getElementById("detalle");
    imagen = detallePopUp.children[0].children[0].children[0];
    nombre = detallePopUp.children[0].children[1].children[0];
    descripcion = detallePopUp.children[0].children[1].children[1];
    precio = detallePopUp.children[1].children[0];
    imagen.src = datos.children[0].children[0].src;
    nombre.innerHTML = datos.childNodes[3].childNodes[1].childNodes[0].nodeValue;
    descripcion.innerHTML = datos.childNodes[3].childNodes[3].childNodes[0].nodeValue;
    precio.innerHTML = "Precio: $ "+datos.childNodes[3].childNodes[5].childNodes[0].nodeValue;
    detallePopUp.style = "display: flex;";
    arrayDatosProducto = [datos.children[0].children[0].src, 
    datos.childNodes[3].childNodes[1].childNodes[0].nodeValue,
    datos.childNodes[3].childNodes[3].childNodes[0].nodeValue,
    datos.childNodes[3].childNodes[5].childNodes[0].nodeValue]
}

function cerrarDetalle(){
    let detallePopUp;
    detallePopUp = document.getElementById("detalle");
    detallePopUp.style = "display: none;"
}

/**************************************/
/************* FILTER *****************/
/**************************************/

function filtrar(textFilter){
    let tarjetas;
    tarjetas = document.getElementsByClassName("tarjetas-productos");
    for(i=0; i < tarjetas.length;i++){
        console.log(tarjetas[i].textContent.toLocaleLowerCase().includes(textFilter.toLowerCase()))
        if(tarjetas[i].textContent.toLocaleLowerCase().includes(textFilter.toLowerCase())){
            tarjetas[i].classList.remove("filter");
        }else{
            tarjetas[i].classList.add("filter");
        }
    }
}

/**************************************/
/************* COMPRAR ****************/
/**************************************/

function confirmarCompra(){
    let tabla;
    tabla=document.getElementById("lista__carrito");
    if(tabla.rows.length > 1){
        window.location.assign('../index.html');
        alert("Su compra fue confirmada correctamente!");
    }else{
        alert("el carrito está vacio!");
    }
}

/**************************************/
/************* MODULOS ****************/
/**************************************/

function contadorCarrito(){
    let contador, carrito;
    contador = document.getElementById("contador__carrito");
    carrito = document.getElementById("lista__carrito");
    if(carrito.rows.length > 1){
        contador.innerHTML = carrito.rows.length - 1
    }else{
        contador.innerHTML = ""
    }
}