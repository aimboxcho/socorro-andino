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
                        <input type="text" class="form-control"  placeholder="" name="nombreObjeto" id="nombreObjeto" oninput="validarLetras(this)"  required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Tipo</label>
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
                        <label>Color</label>
                        <input type="text" class="form-control"  placeholder="" name="color" id="color" oninput="validarLetras(this)"  required>
                      </div>
                    </div>
                    <div class="col-md-7 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Registrado Por:</label>
                        <input type="text" class="form-control" name="registrador" id="registrador" oninput="validarLetras(this)">
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
                        </thead>
                        <tbody>
                          <?php while ($cositas = $inventarios->fetch_object()): ?>
                            <tr>
                              <td><?=$cositas->nombreObjeto?></td>
                              <td><?=$cositas->tipo_objeto?></td>
                              <td><?=$cositas->fecha_registro?>  <?=$cositas->hora_registro?></td>
                              <td class='text-right'><?=$cositas->cantidad?></td>
                            </tr>
                          <?php endwhile;?>
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
