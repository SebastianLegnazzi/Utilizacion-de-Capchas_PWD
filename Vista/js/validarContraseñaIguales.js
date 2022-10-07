function verificarContraseñaIgual(contraseña, confContraseña){
    let contraseñaIgual;
    let divCorrecto = document.getElementsByClassName("password-correcta")
    let divInvalidPass = document.getElementsByClassName("invalid-password")
    if((contraseña.value != confContraseña.value)){
        contraseña.style="border: 1px solid red; color: red; background-image: none;";
        confContraseña.style="border: 1px solid red; color: red; background-image: none;";
        divCorrecto[0].style="display: none;"
        divCorrecto[1].style="display: none;"
        divInvalidPass[0].style="display: block; color: red;"
        divInvalidPass[1].style="display: block; color: red;"
        contraseñaIgual = false;
    }else{
        if((contraseña.value != "") && (confContraseña.value != "")){
            contraseña.style="border: 1px solid green";
            confContraseña.style="border: 1px solid green";
            divCorrecto[0].style="display: block;"
            divCorrecto[1].style="display: block;"
            divInvalidPass[0].style="display: none;"
            divInvalidPass[1].style="display: none;"
            contraseñaIgual = true
        }
    }
    return contraseñaIgual;
}