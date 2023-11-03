<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">

      <div class="logo">
        <a href="<?=base_url?>" class="simple-text logo-mini">
          <img src="<?=base_url?>Views/assets/img/socorro-andino.png">
        </a>
        <a href="<?=base_url?>" class="simple-text logo-normal">
          Socorro Andino
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?=base_url?>">
              <i class="now-ui-icons business_chart-bar-32"></i>
              <p>Analisis de Dato</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url?>voluntario/register">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Registro de Socorrista</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url?>afectado/register">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Registro de Rescate</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url?>voluntario/tables">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Gestion de Voluntarios</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url?>afectado/tables">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Gestion de Rescates</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url?>inventario/inventario">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Inventario</p>
            </a>
          </li>
        </li>
        <li>
          <a href="<?=base_url?>voluntario/logout">
            <i class="now-ui-icons ui-1_simple-remove"></i>
            <p>Cerrar Sesion</p>
          </a>
        </li>
        </ul>
      </div>
    </div>