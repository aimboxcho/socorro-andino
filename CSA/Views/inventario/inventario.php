<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Registro de inventario</h5>
              </div>
              <div class="card-body">
                <form action="<?=base_url?>inventario/save" method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control"  placeholder="" name="nombreObjeto" id="nombreObjeto"   required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Categoria</label>
                        <select name="tipo_objeto" id="tipo_objeto" class="form-control">
                          <option value="Ropa de Montaña">Ropa de Montaña</option>
                          <option value="Ferreteria">Ferreteria</option>
                          <option value="Primeros Auxilios">Primeros Auxilios</option>
                          <option value="Inmovilizadores">Inmovilizadores</option>
                          <option value="Equipo Invernal">Equipo Invernal</option>
                          <option value="Equipo Avalancha">Equipo Avalancha</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Cantidad</label>
                        <input type="number" class="form-control" placeholder="" name="cantidad" id="cantidad" oninput="validarNumber(this)" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Color(opcional)</label>
                        <input type="text" class="form-control"  placeholder="" name="color" id="color" oninput="validarLetras(this)">
                      </div>
                    </div>
                    <div class="col-md-7 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Registrado Por:</label>
                        <input type="text" class="form-control" name="registrador" id="registrador" oninput="validarLetras(this)" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Observacion(opcional)</label>
                        <input type="text" name="observacion"  id="observacion"  class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" value="Ingresar" style="background:rgb(249, 99, 50); color:white; ">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="content" style="padding: 1%;">
              <div class="row">
              <!--Todos los Registros ------------------------------------------------------------------->
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Equipo de Montaña</h4>
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
                            Articulo
                          </th>
                          <th>
                            Tipo
                          </th>
                          <th>
                            Registro
                          </th>
                          <th class="text-right">
                            Cantidad
                          </th>
                          <th class="text-right">
                            Acciones
                          </th>
                          <th class="text-right">
                            Eliminar
                          </th>
                        </thead>
                        <tbody>
                        <?php while ($cositas = $inventarios->fetch_object()): ?>
                          <tr>
                            <td><?= $cositas->nombreObjeto ?></td>
                            <td><?= $cositas->tipo_objeto ?></td>
                            <td><?= $cositas->fecha_registro ?> / <?= $cositas->hora_registro ?></td>
                            <td class='text-center'>
                            <div id="cantidad_<?=$cositas->id?>" style="display:inline-block;"><?= $cositas->cantidad ?></div>

                            </td>
                            <td class='text-right'><button class="btn btn-sm btn-primary" onclick='sumarProducto(<?=$cositas->id?>)'>+</button>
                                <button class="btn btn-sm btn-danger" onclick='restarProducto(<?=$cositas->id?>)'>-</button>
                            </td>
                            <td class="text-center">
                              <a href=""  onclick="verificarContraseña(<?=$cositas->id?>)"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>


              <!--EQUIPO DE MONTAÑA ------------------------------------------------------------------->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Equipo de Montaña</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table display">
                        <thead class=" text-primary">
                          <th>
                            Articulo
                          </th>
                          <th class="text-right">
                            Cantidad
                          </th>
                        </thead>
                        <tbody>
                          <?php while ($montana = $montanas->fetch_object()): ?>
                            <tr>
                              <td><?=$montana->nombreObjeto?></td>
                              <td class='text-right'><?=$montana->cantidad?></td>
                            </tr>
                          <?php endwhile;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--FIN EQUIPO DE MONTAÑA ------------------------------------------------------------------->
              <!--EQUIPO INVERNAL ------------------------------------------------------------------->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Equipo Invernal</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table display">
                        <thead class=" text-primary">
                          <th>
                            Articulo
                          </th>
                          <th class="text-right">
                            Cantidad
                          </th>
                        </thead>
                        <tbody>
                          <?php while($ferreteria = $ferreterias->fetch_object()): ?>
                          <tr>
                            <td>
                              <?=$ferreteria->nombreObjeto?>
                            </td>
                            <td class="text-right">
                              <?=$ferreteria->cantidad?>
                            </td>
                          </tr>
                          <?php endwhile;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--FIN EQUIPO INVERNAL ------------------------------------------------------------------->
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        function sumarProducto(id) {
            $.ajax({
                type: "POST",
                url: "<?=base_url?>inventario/operacion",
                dataType: "text", 
                data: { id: id, operacion: 'sumar' },
                success: function(response) {
                  //  $("#cantidad_" + id).text(response);
                  setTimeout(function() {
                      location.reload();
                  }, 0)
                }
            });
        }

        function restarProducto(id) {
            $.ajax({
                type: "POST",
                url: "<?=base_url?>inventario/operacion",
                data: { id: id, operacion: 'restar' },
                success: function(response) {
                  //  $("#cantidad_" + id).text(response);
                  setTimeout(function() {
                      location.reload();
                  }, 0)
                }
            });

        }
        
        function verificarContraseña(id){
            var contraseña_ingreso = prompt("Ingresar codigo de acceso");
            var contraseña = "admin"

            if(contraseña_ingreso === contraseña){
              window.location.href = "<?=base_url?>inventario/delete&id="+id;
            }else{
              alert("La contraseña es incorrecta, no puedes eliminar");
            }
        }
</script>





