<div class="panel-header">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"><i class="now-ui-icons business_chart-pie-36"></i> Afectados por Zona</h5>
              </div>
              <div class="card-body" style="height: 400px;">
                  <div class="chart-area"  style="display:flex; justify-content:center; padding: 5px;">
                      <div id="chart"></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-chart" >
              <div class="card-header">
                <h5 class="card-category"><i class="now-ui-icons business_chart-pie-36"></i> Afectados por Zona</h5>
              </div>
              <div class="card-body" style="height: 400px;">
                  <div class="chart-area"  style="display:flex; justify-content:center; padding: 5px;">
                      <div id="chart4"></div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card" >
              <div class="card-header">
                <h5 class="card-category"><i class="now-ui-icons business_chart-pie-36"></i> Cantidad de Busqueda y Rescate total</h5>
              </div>
              <div class="card-body">
                  <div id="chart2"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-8">
            <div class="card ">
              <div class="card-header">
                <h5 class="card-category"><i class="now-ui-icons business_chart-pie-36"></i> Cantidad de accidentado por tipo de lesion</h5>
              </div>
              <div class="card-body">
                  <div id="chart3"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-8">
            <div class="card ">
              <div class="card-header">
                <h5 class="card-category"><i class="now-ui-icons business_chart-pie-36"></i> Cantidad de accidentado por tipo de lesion</h5>
              </div>
              <div class="card-body">
                  <div id="chart5"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Acciones realizadas en la web por fecha</h5>
                <h4 class="card-title">Lista</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table display">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Lugar
                      </th>
                      <th>
                        Desnivel
                      </th>
                      <th>
                        Fecha
                      </th>
                      <th>
                        Tiempo
                      </th>
                      <th>
                        Voluntarios
                      </th>
                      <th class="text-right">
                        Tipo de Rescate
                      </th>
                    </thead>
                    <tbody>
                    <?php while($rescate = $rescates->fetch_object()):?>
                      <tr>
                        <td><?=$rescate->nombre?></td>
                        <td><?=$rescate->zona?></td>
                        <td><?=$rescate->desnivel_positivo?></td>
                        <td><?=$rescate->fecha_rescate?></td>
                        <td><?=$rescate->tiempo_hora?></td>
                        <td><?=$rescate->cantidad?></td>

                        <td class="text-right">
                        <?=$rescate->tipo_rescate?>
                        </td>
                      </tr>
                      <?php endwhile?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Ultimo hace 1 hora
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>




      

