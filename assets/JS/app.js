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


window.addEventListener('load', async () => {



    //const form = document.querySelector('#formc');
   const form = document.getElementById('formCom');
   form.addEventListener('submit', (e) => {
       e.preventDefault();

       var reporteNum = document.getElementById('reportNum').value;
       var nombre = document.getElementById('nombre').textContent;
       var area =   document.getElementById('area').textContent;
       var fecha =  document.getElementById('date').textContent;
       var hour =   document.getElementById('hour').textContent;
       var problem = document.getElementById('problem').textContent;
       var solution = document.getElementById('solve').textContent;
       var firma = document.getElementById('firmaUserImg').src;
       var Techfirma = document.getElementById('tecFirma').src;
       generatePDF(reporteNum, nombre, area, fecha, hour, problem, solution, firma, Techfirma);
   })

});

async function generatePDF(reporteNum, nombre, area, fecha, hour, problem, solution, firma, Techfirma) {
    const image = await loadImage("../../img/Plantilla-ReportesTolsa.png");
    //const signatureImage = Pad.toDataURL("image/png");
    //const signatureImages2 = Pad2.toDataURL();

    const pdf = new jsPDF('p', 'pt', 'letter');
    pdf.addImage(image, 'PNG', 0, 0, 565, 792);
    
    pdf.addImage(firma, 'PNG', 56, 690, 200, 70);
    pdf.addImage(Techfirma, 'PNG', 335, 696, 200, 70);
    //pdf.addImage(firma, 'PNG', 20, 690, 300, 60);
    pdf.setFontSize(12);

    pdf.text(reporteNum, 497, 157);
    
    pdf.text(nombre, 195, 157);
    pdf.text(area, 80, 178);
    pdf.text(fecha, 422, 178);
    pdf.text(hour, 422, 199);
    //pdf.text(problem, 42, 240);
    
    var splitProblem = pdf.splitTextToSize(problem, 495);
    var splitTxtSolution = pdf.splitTextToSize(solution, 495); 
    
    pdf.text(42, 234, splitProblem);
    pdf.text(42, 485, splitTxtSolution);
    pdf.setFillColor(0,0,0);
    pdf.save("reporte.pdf");

}