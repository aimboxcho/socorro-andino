
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Registrar nuevo Rescate</h5>
              </div>
              <div class="card-body">
                <form action="<?=base_url?>afectado/save" method="POST">
                  <p>Informacion del Afectado</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre y Apellido de Accidentado</label>
                        <input type="text" name="nombre" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="number" name="edad" class="form-control" oninput="validarNumber(this)" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Numero Celular</label>
                        <input type="number" name="celular" class="form-control" oninput="validarNumber(this)" required>
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" name="email" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Club Pertenece</label>
                        <input type="text" name="club" class="form-control"   required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Comuna Pertenece</label>
                        <?php $comunas = Utils::ShowComunas(); ?>
                        <select name="id_comuna"  class="form-control">
                            <?php while($comuna = $comunas->fetch_object()):?>
                                <option value="<?=$comuna->id?>"><?=$comuna->nombreComuna?></option>
                            <?php  endwhile; ?>
                          </select>
                      </div>
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Años de experiencia</label>
                        <input type="number" name="experiencia" class="form-control" oninput="validarNumber(this)" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Sexo</label>
                        <select name="sexo"  class="form-control" required>
                          <option value="Hombre">Hombre</option>
                          <option value="Mujer">Mujer</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Rut</label>
                        <input type="text" name="rut" class="form-control"  oninput="validarInput(this)" required>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <p>Informacion general</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Tipo de Rescate</label>
                        <select name="tipo_rescate"  class="form-control" required>
                          <option value="Rescate">Rescate</option>
                          <option value="Busqueda">Busqueda</option>
                          <option value="Varado">Varado</option>
                          <option value="Fellecido">Fellecido</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Fecha de Rescate</label>
                        <input type="date" name="fecha_rescate" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Duracion total de horas</label>
                        <input type="time" name="tiempo_hora" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Descripcion Accidente</label>
                        <input type="text" class="form-control" name="descripcion">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Zona de Accidente</label>
                        <input type="text" class="form-control" name="zona">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ruta Utilizada</label>
                        <input type="text" class="form-control" name="ruta">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Cantidad de Voluntarios</label>
                        <input type="number" class="form-control" oninput="validarNumber(this)" name="cantidad">
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <p>Tiempos</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tiempo del llamado</label>
                        <input type="time" class="form-control" name="tiempo_inicial">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tiempo del Encuentro con victima</label>
                        <input type="time" class="form-control" name="tiempo_concurrido" >
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tiempo de finalizacion del rescate</label>
                        <input type="time" class="form-control" name="tiempo_finalizado">
                      </div>
                    </div>
                  </div>
                  <br>
                  <p>Detalles del Rescate</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Desnivel positivo</label>
                        <input type="number" class="form-control" oninput="validarNumberAltura(this, 4)" name="desnivel_positivo" maxlength="4">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Desnivel negativo</label>
                        <input type="number" class="form-control" oninput="validarNumberAltura(this, 4)" name="desnivel_negativo" maxlength="4">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Altura Maxima Alcanzada(MSNM)</label>
                        <input type="number" class="form-control" oninput="validarNumberAltura(this, 4)" name="altura_maxima" maxlength="4">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Distancia Recorrida(KM)</label>
                        <input type="number" class="form-control" oninput="validarNumberDistancia(this, 3)" name="distancia_recorrida" maxlength="3">
                      </div>
                    </div>
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Condiciones Meteorologica(Lluvia, Nieve, Barro, Ect...)</label>
                        <input type="text" class="form-control" name="condiciones">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Lider de Operación Responsable</label>
                        <?php $voluntarios = Utils::ShowVoluntarios();?>
                        <select name="id_voluntario"  class="form-control">
                          <?php while($voluntario = $voluntarios->fetch_object()): ?>
                              <option value="<?= $voluntario->id ?>">
                                <?=$voluntario->nombres_volun?>
                              </option>
                          <?php endwhile; ?>
                        </select>                      
                      </div>
                    </div>
                  </div>
                  <br><br>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" value="Ingresar" style="background:rgb(249, 99, 50); color:white; ">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  