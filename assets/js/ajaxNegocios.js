$(document).ready(function () {
    $('#example').DataTable({
        "order": [[ 0, "desc" ]],
        "ajax": {
            url: 'components/modules/data/negocios.json',
            dataSrc: ''
        },
        columns: [
            { data: 'id_negocio' },
            { data: 'razon_social' },
            { data: 'nombre' },
            { data: 'ap_paterno' },
            { data: 'ap_materno' },
            { data: 'rfc' },
            { data: 'domicilio_negocio' },
            { data: 'estado_permiso' },
            { data: 'num_licencia' },
            { data: 're_sello' },
            { data: 'permisos_temporales' },
            { data: 'fecha_emision' },
            { data: 'fecha_expiracion' },
            { data: 'descripcion' },
        ],
    });
});