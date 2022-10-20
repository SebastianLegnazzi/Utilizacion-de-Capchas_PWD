function redireccionarPaginaInicio() {
    location.href = 'index.php'
}
function redireccionarInicioSesion() {
    location.href = 'IniciarSesion.php'
}

function comprobarCuenta(){
    let usuarioIngresado = localStorage.getItem('usuarioIngresado')
    let contraseñaIngresada = localStorage.getItem('contraseniaIngresada')
    if (localStorage.getItem('contrasenia') != null && localStorage.getItem('nombre') != null){
        if(localStorage.getItem('nombre') == usuarioIngresado && localStorage.getItem('contrasenia') == contraseñaIngresada){
            localStorage.setItem('inicio', 'si');
            Swal.fire({
                icon: 'success',
                title: 'Se ha iniciado sesion correctamente!',
                showConfirmButton: false,
                timer: 1500
            })
            setTimeout("redireccionarPaginaInicio()", 1450);
        }else{
            localStorage.setItem('inicio', 'no');
            Swal.fire({
                icon: 'error',
                title: 'La contraseña y/o el usuario no existen!',
                showConfirmButton: false,
                timer: 1500
            })
            setTimeout("redireccionarInicioSesion()", 1450);
        }
    }else{
        localStorage.setItem('inicio', 'no');
        Swal.fire({
            icon: 'error',
            title: 'No existe la cuenta ingresada!',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout("redireccionarInicioSesion()", 1450);
    }
}