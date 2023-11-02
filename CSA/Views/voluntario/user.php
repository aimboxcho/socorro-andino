
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Informacion de usuario</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$_SESSION['identity']->nombres_volun?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$_SESSION['identity']->apellido_volun?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" class="form-control" disabled="" value="<?=$_SESSION['identity']->email_volun?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Rut</label>
                        <input type="text" class="form-control" disabled="" value="<?=$_SESSION['identity']->rut_volun?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Fecha Nacimiento</label>
                        <input type="text" class="form-control" disabled="" value="<?=$_SESSION['identity']->fecha_naci_volun?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Telefono/Celular</label>
                        <input type="text" class="form-control"  disabled="" value="<?=$_SESSION['identity']->telefono_volun?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Enfermedad</label>
                        <input type="text" class="form-control" disabled="" value="<?=$_SESSION['identity']->enfermedad_volun?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Alergia</label>
                        <input type="text" class="form-control" disabled=""  value="<?=$_SESSION['identity']->alergia_volun?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Tipo de Sangre</label>
                        <input type="text" class="form-control" disabled="" value="<?=$_SESSION['identity']->tipo_sangre?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Detalles del Socorrista</label>
                        <textarea rows="4" cols="80" class="form-control" disabled="" ><?=$_SESSION['identity']->descripcion_volun?></textarea>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?=base_url?>uploads/images/<?=$_SESSION['identity']->imagen_volun?>" alt="...">
                    <h5 class="title"><?=$_SESSION['identity']->nombres_volun?></h5>
                  </a>
                </div>
                <p class="description text-center">
                 <?=$_SESSION['identity']->tipo_volun?> a Socorro Andino<br>
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Inicio
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Derechos reservados para <a href="#" target="_blank">Socorro Andino</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
