$(document).ready(function () {
    $('#example').DataTable({
        ajax: {
            url: 'components/modules/data/datos.json',
            dataSrc: ''
        },
        columns: [
            { data: 'razon_social' },
            { data: 'nombre' },
            { data: 'ap_paterno' },
            { data: 'ap_materno' },
            { data: 'rfc' },
            { data: 'domicilio_negocio' },
            { data: 'estado_permiso' },
            { data: 'num_licencia' },
            { data: 're_sello' },
            { data: 'fecha_emision' },
            { data: 'fecha_expiracion' },
            { data: 'descripcion' },
        ],
    });
});