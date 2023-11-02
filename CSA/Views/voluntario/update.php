
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Actualizar datos de Voluntario</h5>
              </div>
              <div class="card-body">
                <form action="<?=base_url?>voluntario/updatesave&id=<?=$user->id?>" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Correo Electronico</label>
                        <input type="email" class="form-control" name="email_volun" value="<?=$user->email_volun?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="number" class="form-control" name="edad_volun" value="<?=$user->edad_volun?>">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" name="telefono_volun" value="<?=$user->telefono_volun?>" >
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ocupacion</label>
                        <input type="text" class="form-control" name="ocupacion" value="<?=$user->ocupacion?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tipo de Voluntario</label>
                        <input type="text" class="form-control" name="tipo_volun" value="<?=$user->tipo_volun?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Enfermedad</label>
                        <input type="text" class="form-control" name="enfermedad_volun" value="<?=$user->enfermedad_volun?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Alergia</label>
                        <input type="text" class="form-control" name="alergia_volun" value="<?=$user->alergia_volun?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Detalles del Socorrista(opcional)</label>
                        <textarea rows="4" cols="80" class="form-control"  name="descripcion_volun"><?=$user->descripcion_volun?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" value="Actualizar Voluntario" style="background:rgb(249, 99, 50); color:white; ">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
