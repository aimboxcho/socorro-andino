<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">
                        Gestion de Gastos del CSA
                    </h5>
                    <p class="text-danger">
                        Para hacer modificaciones debe consultar con el Administrador, Aqui solo podras ingresar y visualizar
                    </p>
                </div>
                <div class="card-body">
                    <form action="<?=base_url?>gastos/save" method="POST">
                        <div class="form-group">
                            <label for="">Descripcion de gasto</label>
                            <input type="text" class="form-control" name="descripcion" required>
                        </div>                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <input type="number" class="form-control" name="cantidad" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Costo</label>
                                    <input type="number" class="form-control" name="costo" required>
                                </div>  
                            </div>
                        </div>                     
                        <div class="form-group">
                            <label for=""></label>
                            <input type="hidden" class="form-control" name="user_id" value="<?=$_SESSION['identity']->id?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control" value="Ingresar" style="background:rgb(249, 99, 50); color:white; ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                            Descripcion
                          </th>
                          <th>
                            Costo
                          </th>
                          <th>
                            Cantidad
                          </th>
                          <th>
                            Registro
                          </th>
                          <th class="text-center">
                            Eliminar
                          </th>
                        </thead>
                        <tbody>
                        <?php while($gastito = $tipo_gasto->fetch_object()): ?>
                          <tr>
                            <td><?= $gastito->descripcion ?></td>
                            <td><?= '$' . number_format($gastito->costo, 0, '.', '.') . ' CLP' ?></td>
                            <td><?= $gastito->cantidad ?></td>
                            <td class="time-difference"><?= $gastito->created_at ?></td>
                            <td class="text-center">
                              <a href=""  onclick="verificarContraseña(<?=$gastito->id?>)"><i class="now-ui-icons ui-1_simple-remove"></i></a>
                            </td>
                          </tr>
                        <?php endwhile; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
</div>