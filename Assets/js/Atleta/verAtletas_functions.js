window.addEventListener('DOMContentLoaded', () => {

const Atletas = new DataTable("#Atletas", {
    language: {
        url: base_url + "/Assets/js/plugins/datatables/es-ES.json",
    },
    ajax: {
        url: base_url + '/Atleta/getAtletas',
        dataSrc: "",
    },
    columns: [
       {data: "CEDULA"},
       {data: "NOMBRE"},
       {data: "DISCIPLINA"},
       {data: "TALLA_FRANELA"},
       {data: "TALLA_PANTALON"},
       {data: "TALLA_ZAPATO"},
       {data: "options"}
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