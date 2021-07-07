var tabla = $('#tablaMaterias').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
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
    "ajax":'./model/mostrarMateriasAlumno.php',
    "columns": [
        {"data": "nombreDocente"},
        {"data": "apellidoPaternoP"},
        {"data": "apellidoMaternoP"},
        {"data": "nombreMateria"},
        {"data": "aula"},
        {"data": "carrera"},
        //{"data": "btnEliminar"},
        //{"defaultContent":'<span class="btn btn-warning btn-sm text-white borde-button"  data-toggle="modal" data-target="#editarAlumnoModal"><i class="fas fa-edit"></i></span>'},
        //{"defaultContent":'<span class="btn btn-danger btn-sm text-white borde-button"  data-toggle="modal" data-target="#eliminarAlumnoModal"><i class="fas fa-trash"></i></span>'}
    ]
  });
  