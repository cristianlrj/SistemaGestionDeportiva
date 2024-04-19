window.addEventListener('DOMContentLoaded', () => {

const Atletas = new DataTable("#Atletas", {
    language: {
        url: base_url + "/Assets/js/plugins/datatables/es-ES.json",
    },
    ajax: {
        url: ' ' + base_url + '/Api/getPersons',
        dataSrc: "",
    },
    columns: [
       {data: "cedula"},
       {data: "nombre"},
       {data: "apellido"},
       {data: "carrera"},
       {data: "tipo"}
    ],
    scrollX: true,
    responsive: true,
    order: [[0, "desc"]],
})

});