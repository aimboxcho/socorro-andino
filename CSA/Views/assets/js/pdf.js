function genPDF(){
    var doc=new jsPDF();
    
    let nombre=document.getElementById('nombre').value;
    let rut=document.getElementById('rut').value;
    let email=document.getElementById('email').value;
    let celular=document.getElementById('celular').value;
    let sexo=document.getElementById('sexo').value;
    let edad=document.getElementById('edad').value;
    let comuna=document.getElementById('comuna').value;
    let club=document.getElementById('club').value;
    let zona=document.getElementById('zona').value;
    let ruta=document.getElementById('ruta').value;
    let tipo_rescate=document.getElementById('tipo_rescate').value;
    let descripcion=document.getElementById('descripcion').value;
    let fecha_rescate=document.getElementById('fecha_rescate').value;
    let tiempo_hora=document.getElementById('tiempo_hora').value;
    let tiempo_inicial=document.getElementById('tiempo_inicial').value;
    let tiempo_concurrido=document.getElementById('tiempo_concurrido').value;
    let tiempo_finalizado=document.getElementById('tiempo_finalizado').value;
    let desnivel_positivo=document.getElementById('desnivel_positivo').value;
    let desnivel_negativo=document.getElementById('desnivel_negativo').value;
    let altura_maxima=document.getElementById('altura_maxima').value;
    let distancia_recorrida=document.getElementById('distancia_recorrida').value;
    let condiciones=document.getElementById('condiciones').value;
    let voluntario=document.getElementById('voluntario').value;
    let cantidad=document.getElementById('cantidad').value;

    doc.setFontSize(15);
    doc.text('Documentacion del Operativo', 20, 20);

    doc.setLineWidth(0.5);
    doc.line(20, 45, 190, 45);

    doc.text('Informacion personal', 20, 40);
    doc.text(20,60,'Nombre: '+nombre);
    doc.text(100,60,'Rut: '+rut);

    doc.text(20,70,'Email: '+email);
    doc.text(100,70,'Celular/Telefono: '+celular);

    doc.text(20,80,'Sexo: '+sexo);
    doc.text(100,80,'Edad: '+edad);

    doc.text(20,90,'Club al que pertenece: '+club);


    doc.setLineWidth(0.5);
    doc.line(20,115, 190, 115);
    doc.text('Detalles de la zona de accidente', 20, 110);

    doc.text(20,130,'Comuna: '+comuna);
    doc.text(100,130,'Zona de rescate: '+zona);

    doc.text(20,140,'Ruta utilizada: '+ruta);
    doc.text(100,140,'Tipo de rescate: '+tipo_rescate);

    doc.text(20,150,'Accidente: '+descripcion);
    doc.text(100,150,'Fecha de rescate: '+fecha_rescate);

    doc.setLineWidth(0.5);
    doc.line(20,175, 190, 175);
    doc.text('Detalles de la ruta', 20, 170);

    doc.text(20,190,'Tiempo total: '+tiempo_hora);
    doc.text(100,190,'Hora de inicio: '+tiempo_inicial);

    doc.text(20,200,'Hora de encuentro: '+tiempo_concurrido);
    doc.text(100,200,'Hora de finalizacion: '+tiempo_finalizado);

    doc.text(20,210,'Desnivel positivo: '+desnivel_positivo);
    doc.text(100,210,'Desnivel Negativo: '+desnivel_negativo);

    doc.text(20,220,'Altura Maxima: '+altura_maxima);
    doc.text(100,220,'Distancia Recorrida: '+distancia_recorrida);

    var pageCount = doc.internal.getNumberOfPages(); // Obtener el número total de páginas
    for (var i = 1; i <= pageCount; i++) {
        doc.setPage(i); // Seleccionar la página actual
        doc.text('Informacion reservada de CSA - Página ' + i + ' de ' + pageCount, 20, doc.internal.pageSize.height - 10);
    }

    doc.save('Informacion.pdf');

}