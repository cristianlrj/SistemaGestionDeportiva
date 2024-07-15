window.addEventListener('DOMContentLoaded', () => {

const Atletas = new DataTable("#Usuarios", {
    language: {
        url: base_url + "/Assets/js/plugins/datatables/es-ES.json",
    },
    ajax: {
        url: base_url + '/Usuario/getUsuarios',
        dataSrc: "",
    },
    columns: [
       {data: "id_usuario"},
       {data: "nombre"},
       {data: "rol"},
       {data: "opc"}
    ],
    layout: {
        topStart: {
            buttons: [
                {
                  extend: "copyHtml5",
                  text: "<i class='far fa-copy'></i> Copiar",
                  titleAttr: "Copiar",
                  className: "btn btn-secondary m-1",
                },
                {
                  extend: "excelHtml5",
                  text: "<i class='fas fa-file-excel'></i> Excel",
                  titleAttr: "Esportar a Excel",
                  className: "btn btn-secondary m-1",
                },
                {
                  extend: "csvHtml5",
                  text: "<i class='fas fa-file-csv'></i> CSV",
                  titleAttr: "Esportar a CSV",
                  className: "btn btn-secondary m-1",
                },
              ],
        }
    },
    scrollX: true,
    responsive: true,
    order: [[0, "asc"]],
})

});