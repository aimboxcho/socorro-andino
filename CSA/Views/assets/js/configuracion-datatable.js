var table = $('table.display').DataTable({
    responsive: true,
    paging: true,
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        //"lengthMenu": "Mostrar _MENU_ Entradas",
        "lengthMenu": "",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    dom: 'Blfrtip',
     buttons: [
       {
          extend: 'pdf',
          exportOptions: {
          }
       },
       {
          extend: 'csv',
       },
       {
          extend: 'excel',
       },
       'print'
     ]
});