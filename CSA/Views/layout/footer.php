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

<script>
  <?php 
    $chartjs = new Chartjs();
    $data = $chartjs->Grafico1();
    $data_json = json_encode($data);
  ?>
  var chartData = <?php echo $data_json; ?>;
</script>


<script>
  <?php 
    $chartjs = new Chartjs();
    $data = $chartjs->Grafico2();
    $data_json2 = json_encode($data);
  ?>
  var chartDatas = <?php echo $data_json2; ?>;
</script>




<script src="<?=base_url?>Views/assets/js/dashboard.js"></script>



  <!-- JavaScript Libraries -->
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
            columns: [0,1]
          }
       },
       {
          extend: 'csv',
       } 
     ] 

});
</script>

</body>

</html>