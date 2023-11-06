      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registro de Socorrista</h4>
                <p><a href="<?=base_url?>afectado/register" class="btn">Registrar Rescate</a></p>
                <?php if(isset($_SESSION['complete'])):?>
                    <div class="card-header" style="background:rgb(123, 171, 91); color: white; display: inline-block;">
                      <p><?=$_SESSION['complete'];?></p>
                      <?php Utils::deletemessage();?>
                    </div>
                <?php elseif(isset($_SESSION['failed'])):?>
                    <div class="card-header" style="background:rgb(193, 82, 82); color: white; display: inline-block;">
                      <p><?=$_SESSION['failed'];?></p>
                      <?php Utils::deletemessage();?>
                    </div>
                <?php endif; ?>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table display">
                    <thead class=" text-primary">
                      <th>
                        Nombre
                      </th>
                      <th>
                        Tipo Rescate
                      </th>
                      <th>
                        Fecha Rescate
                      </th>
                      <th>
                        Ubicación 
                      </th>
                      <th>
                        Ruta 
                      </th>
                      <th class="text-right">
                        Responsable
                      </th>
                      <th class="text-right">
                        Eliminar
                      </th>
                    </thead>
                    <tbody>
                    <?php while($afectado =  $afectados->fetch_object()): ?>
                      <tr>
                        <td>
                          <?=$afectado->nombre?>
                        </td>
                        <td>
                          <?=$afectado->tipo_rescate?>
                        </td>
                        <td>
                          <?=$afectado->fecha_rescate?>
                        </td>
                        <td>
                          <?=$afectado->zona?>
                        </td>
                        <td>
                          <?=$afectado->ruta?>
                        </td>
                        <td class="text-right">
                          <?=$afectado->voluntario?>
                        </td>
                        <td class="text-center">
                          <a href="" onclick="verificarContraseña(<?=$afectado->id?>)"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                        </td>
                      </tr>
                      <?php endwhile; ?>
                    </tbody>
                    <br>
                    <tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script>
        function verificarContraseña(id){
            var contraseña_ingreso = prompt("Ingresar codigo de acceso");
            var contraseña = "admin"

            if(contraseña_ingreso === contraseña){
              window.location.href = "<?=base_url?>afectado/delete&id="+id;
            }else{
              alert("La contraseña es incorrecta, no puedes eliminar");
            }
        }
    </script>
    </div>
  </div>
