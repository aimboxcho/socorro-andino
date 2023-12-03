      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Informacion con fecha <?=$afectado->fecha_rescate?></h5>
                <p><a href="<?=base_url?>Views/afectado/pdf.php" class="btn">Descargar PDF</a></p>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->nombre?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Rut</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->rut?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" class="form-control" disabled="" value="<?=$afectado->email?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Celular</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->celular?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Genero</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->sexo?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->edad?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Comuna</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->comuna?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Club</label>
                        <input type="text" class="form-control"  disabled="" value="<?=$afectado->club?>">
                      </div>
                    </div>
                  </div>

                  <br>
                  <p>Informacion del Rescate</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Cerro o Zona de accidente</label>
                        <input type="text" class="form-control"  disabled="" value="<?=$afectado->zona?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ruta de acceso utilizado</label>
                        <input type="text" class="form-control"  disabled="" value="<?=$afectado->ruta?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tipo de Operación</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->tipo_rescate?>">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Descripcion de accidente(tipo lesion, varado o perdido)</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->descripcion?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Fecha de operación</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->fecha_rescate?>">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Tiempo total utilizado en rescate</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->tiempo_hora?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tiempo inicial del rescate</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->tiempo_inicial?>">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Tiempo de contacto con afectado</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->tiempo_concurrido?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Tiempo de finalizacion del rescate</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->tiempo_finalizado?>">
                      </div>
                    </div>
                  </div>

                  <br>
                  <p>Informacion de la Ruta</p>
                  <hr>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Desnivel Positivo</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->desnivel_positivo?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Desnivel Negativo</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$afectado->desnivel_negativo?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Altura maxima alcanzada</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->altura_maxima?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Distancia Recorrida</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->distancia_recorrida?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Condiciones del terreno</label>
                        <input type="text" class="form-control" disabled="" value="<?=$afectado->condiciones?>">
                      </div>
                    </div>
                  </div>

                  <br>
                  <p>Informacion Personal del socorro</p>
                  <hr>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Lider de Operación</label>
                        <input type="text" class="form-control"  disabled="" value="<?=$afectado->voluntario?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Cantidad de Rescatista involucrado</label>
                        <input type="number" class="form-control"  disabled="" value="<?=$afectado->cantidad?>">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
