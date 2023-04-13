$(document).ready(function () {
    mejores();

    tabla = $('#tablaMejores').dataTable({
        "aProcessing": true,
        "aServerside": true,
        dom: 'Bfrtip', 
        buttons: [
            {
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel "></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
        ],
        "ajax": {
            url: '../controller/controllerAspirantes.php?op=listarAspirantes',
            type: "post",
            datatype: "json",
            error: function(e) {
                console.log(e.responseText);
                alert(e);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 5,
        "autoWidth": false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }

        }

    }).dataTable();

});



function mejores(){
    $.post("../controller/controllerAspirantes.php?op=MejoresAspirantes", function (data) {
        
        $('#losMejores').html(data);

    });
}