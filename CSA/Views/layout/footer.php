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
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-crosshair@1.1.0/dist/chartjs-plugin-crosshair.js"></script>
<!-- Chartist.js -->

<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->Grafico1();
    $data_json = json_encode($date);
  ?>
  var chartBar = <?php echo $data_json; ?>;
</script>

<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->Grafico2();
    $data_json4 = json_encode($date);
  ?>
  var chartTipo = <?php echo $data_json4; ?>;
</script>

<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->GraficoLine();
    $data_json2 = json_encode($date);
  ?>
  var chartLine = <?php echo $data_json2; ?>;
</script>

<script>
  <?php 
    $chartjs = new Chartjs();
    $date = $chartjs->GraficoPie();
    $data_json3 = json_encode($date);
  ?>
  var chartPie = <?php echo $data_json3; ?>;
</script>


<script src="<?=base_url?>Views/assets/js/dashboard-apex.js"></script>

<!--<script src="<?=base_url?>Views/assets/js/dashboard.js"></script>-->

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
       'print' // Habilitar el botón de impresión
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

</body>

</html>