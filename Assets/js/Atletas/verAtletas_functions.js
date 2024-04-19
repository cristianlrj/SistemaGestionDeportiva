window.addEventListener('DOMContentLoaded', () => {

const Atletas = new DataTable("#Atletas", {
    language: {
        url: base_url + "/Assets/js/plugins/datatables/es-ES.json",
    },
    ajax: {
        url: base_url + '/Api/getPersons',
        dataSrc: "",
    },
    columns: [
       {data: "cedula"},
       {data: "nombre"},
       {data: "apellido"},
       {data: "carrera"},
       {data: "tipo"},
       {data: "disciplina"}
    ],
    layout: {
        topStart: {
            buttons: [
                {
                  extend: "copyHtml5",
                  text: "<i class='far fa-copy'></i> Copiar",
                  titleAttr: "Copiar",
                  className: "btn btn-secondary",
                },
                {
                  extend: "excelHtml5",
                  text: "<i class='fas fa-file-excel'></i> Excel",
                  titleAttr: "Esportar a Excel",
                  className: "btn btn-success",
                },
                {
                  extend: "csvHtml5",
                  text: "<i class='fas fa-file-csv'></i> CSV",
                  titleAttr: "Esportar a CSV",
                  className: "btn btn-info",
                },
              ],
        }
    },
    scrollX: true,
    responsive: true,
    order: [[0, "asc"]],
})

});