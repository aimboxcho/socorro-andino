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

<!--Configuraciones dataTable -->
<script type="text/javascript" src="<?=base_url?>Views/assets/js/configuracion-datatable.js"></script>

<!-- Validaciones de formularios -->
<script type="text/javascript" src="<?=base_url?>Views/assets/js/validaciones.js"></script>

<!-- PDF CON JS -->
<script src="<?=base_url?>Views/assets/js/jspdf.min.js"></script>
<script type="text/javascript" src="<?=base_url?>Views/assets/js/pdf.js"></script>

<!-- Moment -->
<script type="text/javascript" src="<?=base_url?>Views/assets/js/moment.js"></script>


</body>

</html>