<?php
include_once("../estructura/Cabecera.php");
?>
<div class="text-light">
    <div class="container">
        <h1 class="text-center">Productos</h1>
        <hr>
    </div>
    <div id="detalle">
        <div id="detalle__content">
            <div id="content__foto__detalle">
                <img id="foto__detalle" src="" alt="">
            </div>
            <div id="content__info__detalle">
                <h3 id="nombre__detalle"></h3>
                <p id="descripcion__detalle"></p>
            </div>
        </div>
        <div id="content__precio__detalle">
            <p id="precio__detalle"></p>
        </div>
        <div class="content__botones mb-4">
            <button class="btn btn-success me-2" id="detalle__agregar__carrito" onclick="sumarCarrito(); contadorCarrito()">Agregar al Carrito</button>
            <button class="btn btn-danger" id="detalle__cerrar" onclick="cerrarDetalle()">Cerrar</button>
        </div>
    </div>
    <div id="carrito">
        <div id="carrito__content">
            <div id="productos__carrito">
                <table id="lista__carrito">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <span id="total-Compra"></span>
            </div>
        </div>
        <div class="content__botones">
            <button class="btn btn-success me-2" id="detalle__comprar__carrito" onclick="confirmarCompra()">Comprar</button>
            <button class="btn btn-danger" id="detalle__cerrar__carrito" onclick="cerrarCarrito()">Cerrar</button>
        </div>
    </div>
    <div id="head__productos" class="container">
        <div id="content__login" class="d-flex align-self-center">
            <a class="nav-link text-white btn btn-secondary m-2" href="registrarse.php" style="font-family: 'Chivo', sans-serif;">Registrarse</a>
            <a class="nav-link text-white btn btn-secondary m-2" href="IniciarSesion.php" style="font-family: 'Chivo', sans-serif;">Ingresar</a>
        </div>
        <div id="content__filter">
            <input type="text" name="filtrador" id="filtrador" placeholder="Buscador" onkeyup="filtrar(this.value)">
        </div>
        <div id="content__carrito" onclick="abrirCarrito()">
            <p id="contador__carrito"></p>
            <img id="logo-carrito" src="../img/carritoCompra.png" alt="Logo de Carrito">
        </div>
    </div>
    <div id="content__productos">
        <div class="tarjetas-productos box1" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto1.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Campera - Ochentezca </p>
                <span class="descripcion__producto">Campera pensada en los 80??, de algodon y corta de torso, pensada para mujeres. Contiene gorro y pu??os, ademas de bolsillo en su interior</span>
                <span class="precio__producto">8000</span>
            </div>
        </div>
        <div class="tarjetas-productos box2" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto2.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Zapatos - Galan</p>
                <span class="descripcion__producto">Zapatos chalinados con cordones, extremadamente pulclassos hasta parecer un espejo. Pensado para que te las bauticen en tu primer dia de uso</span>
                <span class="precio__producto">30000</span>
            </div>
        </div>
        <div class="tarjetas-productos box3" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto3.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Campera - Caritas</p>
                <span class="descripcion__producto">Campera de jean con un dise??o en su espalda de caras... Que miedo</span>
                <span class="precio__producto">12000</span>
            </div>
        </div>
        <div class="tarjetas-productos box4" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto4.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Pantalon - Chinezco</p>
                <span class="descripcion__producto">Pantalon chino con un dise??o unico en su especie, tela de gabardina y tira mucha facha</span>
                <span class="precio_producto">5000</span>
            </div>
        </div>
        <div class="tarjetas-productos box5" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto5.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Patalon - Elephant</p>
                <span class="descripcion__producto">Pantalon de vestir para dama, con detalles de pliegues y ancho a la pierna</span>
                <span class="precio_producto">9000</span>
            </div>
        </div>
        <div class="tarjetas-productos box6" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto6.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Zapatos - Ni??a Buenita</p>
                <span class="descripcion__producto">Zapatos de color rosa chicle con mo??o y plataforma, dise??ado para gente buenita</span>
                <span class="precio_producto">20000</span>
            </div>
        </div>
        <div class="tarjetas-productos box7" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto7.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Saco - Matrix</p>
                <span class="descripcion__producto">Saco de pa??o para abrigarte de este terrible frio y sin dejar de tirar facha NUNCA</span>
                <span class="precio_producto">7000</span>
            </div>
        </div>
        <div class="tarjetas-productos box8" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto8.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Saco - Madam</p>
                <span class="descripcion__producto">Saco de vestir para dama, simple y elegante, nada mas para decir</span>
                <span class="precio_producto">15000</span>
            </div>
        </div>
        <div class="tarjetas-productos box9" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto9.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Buzo - Rubenchezco</p>
                <span class="descripcion__producto">Buzo de algodon con su interior frizado con cuello en V</span>
                <span class="precio_producto">6500</span>
            </div>
        </div>
        <div class="tarjetas-productos box10" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/producto10.jpg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Pijama - Pinto</p>
                <span class="descripcion__producto">Pijama pinto es la nueva moda, porque hay un pijama en una tienda de ropa elegante? quien sabe</span>
                <span class="precio_producto">4000</span>
            </div>
        </div>
        <div class="tarjetas-productos box10" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/Producto1.jpeg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Saco - Roberti??io</p>
                <span class="descripcion__producto">Saco de gabardina fina, azul marino largo. Acompa??ado con un chaleco dorado y de ragalo el pa??uelo del mismo color que el chaleco</span>
                <span class="precio_producto">56000</span>
            </div>
        </div>
        <div class="tarjetas-productos box10" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/Producto2.jpeg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Vestido - princesita</p>
                <span class="descripcion__producto">Vestido rosado, decorado con flores en su escote. Divino para un cumple de 15</span>
                <span class="precio_producto">25000</span>
            </div>
        </div>
        <div class="tarjetas-productos box10" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/Producto3.jpeg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Vestido - Oro</p>
                <span class="descripcion__producto">Vestido inspirado en la era 1700 a. Oro de 18 kl y seda</span>
                <span class="precio_producto">350000</span>
            </div>
        </div>
        <div class="tarjetas-productos box10" onclick="verDetalle(this)">
            <div class="tarjeta-producto__imagen">
                <img class="foto__producto" src="../img/Productos/Producto4.jpeg" alt="">
            </div>
            <div class="tarjeta-producto__info">
                <p class="nombre__producto">Saco - Capitan Azul</p>
                <span class="descripcion__producto">Traje meticulosamente dise??ado para tirar facha por donde vayas</span>
                <span class="precio_producto">200000</span>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../estructura/Pie.php")
?>