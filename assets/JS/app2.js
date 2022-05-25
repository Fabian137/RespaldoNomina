function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

var Pad = null;
var Pad2 = null;

var imagen=document.getElementById('imagen');
var img2=document.getElementById('img2');
const canvas = document.getElementById('signature-canvas');
const canvas2 = document.getElementById('signature-canvas2');
const idForm = 'dataForm'
window.addEventListener('load', async () => {

    //const canvas = document.querySelector("canvas");. PARA FIRMAS
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;

    Pad = new SignaturePad(canvas, {});

    canvas2.height = canvas2.offsetHeight;
    canvas2.width = canvas2.offsetWidth;

    Pad2 = new SignaturePad(canvas2, {});
/*
    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let nombre = document.getElementById('nombre').value;
        let area =   document.getElementById('area').value;
        let fecha =  document.getElementById('date').value;
        let hour =   document.getElementById('hour').value;
        let problem = document.getElementById('problem').value;
       // generatePDF(nombre, area, fecha, hour, problem);
    })*/

});
function GuardarTrazado(){
    imagen.value = document.getElementById('signature-canvas').toDataURL('image/png');
    document.forms['dataForm'].submit();

    img2.value = document.getElementById('signature-canvas2').toDataURL('image/png');
    document.forms['dataForm'].submit();
  }