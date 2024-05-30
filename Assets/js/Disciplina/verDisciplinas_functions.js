window.addEventListener('DOMContentLoaded', () => {

const Disciplinas = new DataTable("#Disciplinas", {
    language: {
        url: base_url + "/Assets/js/plugins/datatables/es-ES.json",
    },
    ajax: {
        url: base_url + '/Disciplina/getDisciplinas',
        dataSrc: "",
    },
    columns: [
       {data: "id_disciplina"},
       {data: "nombre"},
       {data: "descripcion"},
       {data: "options"},
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