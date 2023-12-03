<footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Derechos reservados para <a href="#" target="_blank">Socorro Andino</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

<!-- Grafico Barra de Zona -->
<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->Grafico1();
    $data_json = json_encode($date);
  ?>
  var chartBar = <?php echo $data_json; ?>;
</script>

<!-- Grafico Barra por tipo de rescate -->
<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->Grafico2();
    $data_json4 = json_encode($date);
  ?>
  var chartTipo = <?php echo $data_json4; ?>;
</script>

<!-- Grafico Linea por fecha de rescate -->
<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->GraficoLine();
    $data_json2 = json_encode($date);
  ?>
  var chartLine = <?php echo $data_json2; ?>;
</script>

<!-- Grafico Linea por fecha de rescate -->
<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->GraficoPie();
    $data_json5 = json_encode($date);
  ?>
  var chartPie = <?php echo $data_json5; ?>;
</script>

<!-- Grafico de Area por tipo de lesión -->

<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->GraficoMap();
    $data_json5 = json_encode($date);
  ?>
  var chartMap = <?php echo $data_json5; ?>;
</script>

<script src="<?=base_url?>Views/assets/js/dashboard-apex.js"></script>

<script src="<?=base_url?>Views/assets/js/core/jquery.min.js"></script>
<script src="<?=base_url?>Views/assets/js/core/popper.min.js"></script>
<script src="<?=base_url?>Views/assets/js/core/bootstrap.min.js"></script>

  <!-- JavaScript Librerias -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>



  <script> var table = $('table.display').DataTable({
    responsive: true,
    paging: true,
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        //"lengthMenu": "Mostrar _MENU_ Entradas",
        "lengthMenu": "",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    dom: 'Blfrtip',
     buttons: [
       {
          extend: 'pdf',
          exportOptions: {
          }
       },
       {
          extend: 'csv',
       },
       {
          extend: 'excel',
       },
       'print'
     ]
});
</script>

<!-- Validaciones de formularios -->

<script>
        function validarInput(input) {
            var valor = input.value;
            valor = valor.replace(/[^0-9kK]/g, '');
            input.value = valor;
        }

        function validarLetras(input) {
            var valor = input.value;
            valor = valor.replace(/[^a-zA-Z]/g, '');
            input.value = valor;
        }

        function validarNumber(input) {
            var valor = input.value;
            valor = valor.replace(/[^0-9]/g, '');
            input.value = valor;
        }

        function validarNumberAltura(input, maxLength) {
            var valor = input.value;
            valor = valor.replace(/[^0-9]/g, '');
            input.value = valor;

            if (input.value.length > maxLength) {
            input.value = input.value.slice(0, maxLength);
            }
        }

        function validarNumberDistancia(input, maxLength) {
            var valor = input.value;
            valor = valor.replace(/[^0-9]/g, '');
            input.value = valor;

            if (input.value.length > maxLength) {
            input.value = input.value.slice(0, maxLength);
            }
        }
</script>


<!-- PDF CON JS -->
<script src="<?=base_url?>Views/assets/js/jspdf.min.js"></script>

<script type="text/javascript">
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
</script>

</body>

</html>