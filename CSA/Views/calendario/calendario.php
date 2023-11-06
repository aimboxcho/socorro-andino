      
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });
    </script>


      <div class="panel-header">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Registro de eventos</h5>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                    <div id='calendar'></div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>

      

