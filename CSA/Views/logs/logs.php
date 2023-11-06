<div class="panel-header">
      </div>
      <div class="content">
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
                        ID
                      </th>
                      <th>
                        Acción
                      </th>
                      <th>
                        Responsable
                      </th>
                      <th class="text-right">
                        Fecha
                      </th>
                    </thead>
                    <tbody>
                    <?php while($registros = $registro->fetch_object()):?>
                      <tr>
                        <td><?=$registros->id?></td>
                        <td><?=$registros->descripcion?></td>
                        <td><?=$registros->voluntario?></td>
                        <td class="text-right">
                        <?=$registros->fecha?>
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

      

