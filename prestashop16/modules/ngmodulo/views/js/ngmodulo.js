function validar() {
    if (document.formNg.stimationArea.value.leng == 0) {
        alert("debe rellenar el formulario");
        return false;
    } else return true;
}