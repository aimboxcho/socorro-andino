      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registro de Voluntario</h4>
                <p><a href="<?=base_url?>voluntario/register" class="btn">Registrar Voluntario</a></p>
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
                        Apellido
                      </th>
                      <th>
                        Email 
                      </th>
                      <th>
                        Tipo 
                      </th>
                      <th>
                        Telefono
                      </th>
                      <th class="text-right">
                        Ver
                      </th>
                      <th class="text-right">
                        Editar
                      </th>
                      <th class="text-right">
                        Eliminar
                      </th>
                    </thead>
                    <tbody>
                    <?php while($voluntario =  $user->fetch_object()): ?>
                      <tr>
                        <td>
                          <?=$voluntario->nombres_volun?>
                        </td>
                        <td>
                          <?=$voluntario->apellido_volun?>
                        </td>
                        <td>
                          <?=$voluntario->email_volun?>
                        </td>
                        <td>
                          <?=$voluntario->tipo_volun?>
                        </td>
                        <td>
                          <?=$voluntario->telefono_volun?>
                        </td>
                        <td class="text-center">
                          <a href="<?=base_url?>voluntario/userU&id=<?=$voluntario->id?>">
                            <i class="now-ui-icons business_badge"></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a href="<?=base_url?>voluntario/update&id=<?=$voluntario->id?>"><i class="now-ui-icons ui-1_settings-gear-63"></i></a>
                        </td>
                        <td class="text-center">
                          <a href="" onclick="verificarContraseñas(<?=$voluntario->id?>)"><i class="now-ui-icons ui-1_simple-remove"></i></a>
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
        function verificarContraseñas(id){
            var contraseña_ingreso = prompt("Ingresar codigo de acceso");
            var contraseña = "admin"

            if(contraseña_ingreso === contraseña){
              window.location.href = "<?=base_url?>voluntario/delete&id="+id;
            }else{
              alert("La contraseña es incorrecta, no puedes eliminar");
            }
        }
    </script>
    </div>
  </div>
