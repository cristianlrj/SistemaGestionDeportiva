let formAtleta = document.getElementById("formAtleta");

let cedulaInput = document.getElementById("cedula");
let nombreCompletoInput = document.getElementById("nombreCompleto");
let carreraInput = document.getElementById("carrera");
let trayectoInput = document.getElementById("trayecto");
let seccionInput = document.getElementById("seccion");

cedulaInput.addEventListener("keyup", (e) => {
    let cedula = e.target.value;
    if (cedula.trim() !== "" && cedula.length > 6) {
        fetch(base_url + "/Api/getPersona/" + cedula)
            .then(res => res.json())
            .then(data => {
                if (data.status) {
                    let persona = data.data;
                    // Actualizar los campos del formulario con los datos obtenidos
                    nombreCompletoInput.value = persona.fullname;
                    carreraInput.value = persona.carrera;
                    trayectoInput.value = persona.trayecto;
                    seccionInput.value = persona.seccion;
                } else {
                    // Limpiar los campos si no se encontraron datos para la cédula ingresada
                    nombreCompletoInput.value = "";
                    carreraInput.value = "";
                    trayectoInput.value = "";
                    seccionInput.value = "";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Manejar errores en la solicitud fetch
            });
    } else {
        // Limpiar los campos si la cédula está vacía
        nombreCompletoInput.value = "";
        carreraInput.value = "";
        trayectoInput.value = "";
        seccionInput.value = "";
    }
});

formAtleta.addEventListener("submit", (e) => {

    e.preventDefault();
    let formData = new FormData(formAtleta);

    fetch(base_url + "/Atleta/setAtleta", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then((res) => {
        if(res.status){
            Swal.fire({
                icon: "success",
                title: res.title,
                text: res.msg,
                showConfirmButton: true,
                confirmButtonText: "Continuar",
                allowOutsideClick: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = base_url + "/Atleta/verAtletas";
                }
            });
        }else{
            Swal.fire({
                icon: "error",
                title: res.title,
                text: res.msg,
                showConfirmButton: false,
                timer: 1500
            });
        }
    })
    .catch(() => {
        Swal.fire({
            icon: "error",
            title: "No disponible!",
            text: "Intente nuevamente...",
            showConfirmButton: false,
            timer: 1500
        });
    })

})