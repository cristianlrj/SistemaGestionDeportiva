let formAtleta = document.getElementById("formAtleta");

let cedula = document.getElementById("cedula");
let nombreCompleto = document.getElementById("nombreCompleto");
let carrera = document.getElementById("carrera");
let trayecto = document.getElementById("trayecto");
let seccion = document.getElementById("seccion");

cedula.addEventListener("keyup", (e) => {
    let cedula = e.target.value;
    if (cedula.trim() !== "" && cedula.length > 6) {
        fetch(base_url + "/Api/getPersona/" + cedula)
            .then(res => res.json())
            .then(data => {
                if (data.status) {
                    let persona = data.data;
                    // Actualizar los campos del formulario con los datos obtenidos
                    nombreCompleto.value = persona.fullname;
                    carrera.value = persona.carrera;
                    trayecto.value = persona.trayecto;
                    seccion.value = persona.seccion;
                } else {
                    // Limpiar los campos si no se encontraron datos para la cédula ingresada
                    nombreCompleto.value = "";
                    carrera.value = "";
                    trayecto.value = "";
                    seccion.value = "";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Manejar errores en la solicitud fetch
            });
    } else {
        // Limpiar los campos si la cédula está vacía
        nombreCompleto.value = "";
        carrera.value = "";
        trayecto.value = "";
        seccion.value = "";
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