var statSend = false;
function checkSubmit() {
    if (!statSend) {
        statSend = true;
        return true;
    } else {
        alert("El mensaje ya se esta enviando...");
        return false;
    }
}

function checkSubmit() {
    document.getElementById("boton").value = "Enviando Mensaje";
    document.getElementById("boton").disabled = true;
    return true;
}
