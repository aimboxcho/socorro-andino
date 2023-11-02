
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Registrar nuevo Voluntario</h5>
              </div>
              <div class="card-body">
                <form action="<?=base_url?>voluntario/save" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control"  placeholder="" name="nombres_volun" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" value="" name="apellido_volun" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" class="form-control" placeholder="" name="email_volun" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Rut</label>
                        <input type="text" class="form-control" placeholder="" name="rut_volun" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" placeholder="" name="fecha_naci_volun" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="number" class="form-control" name="edad_volun" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control"  name="password" required>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control"  name="telefono_volun" value="569" required>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Ocupacion</label>
                        <input type="text" class="form-control" name="ocupacion" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tipo de Voluntario</label>
                        <select name="tipo_volun" class="form-control">
                          <option value="Aspirante">Aspirante</option>
                          <option value="Socorrista">Socorrista</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Enfermedad</label>
                        <select name="enfermedad_volun" class="form-control">
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Alergia</label>
                        <select name="alergia_volun" class="form-control">
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Tipo Sangre</label>
                        <select name="tipo_sangre" class="form-control">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="O">O</option>
                          <option value="AB">AB</option>
                          <option value="Sin Conocimiento">Sin Conocimiento</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Detalles del Socorrista(opcional)</label>
                        <textarea rows="4" cols="80" class="form-control"  name="descripcion_volun"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Fotografia(click aqui)</label>
                        <input type="file" class="form-control" name="imagen_volun" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <input type="submit" class="form-control" value="Ingresar Voluntario" style="background:rgb(249, 99, 50); color:white; ">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
