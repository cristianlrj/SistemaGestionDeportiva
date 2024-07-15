let formAtleta = document.getElementById("formAtleta");

let cedula = document.getElementById("cedula");
let nombreCompleto = document.getElementById("nombreCompleto");
let carrera = document.getElementById("carrera");
let trayecto = document.getElementById("trayecto");
let seccion = document.getElementById("seccion");
let disciplina = document.getElementById("disciplina");
let talla_franela = document.getElementById("talla_franela");
let talla_zapato = document.getElementById("talla_zapato");
let talla_pantalon = document.getElementById("talla_pantalon");
let estatura = document.getElementById("estatura");
let peso = document.getElementById("peso");
let tipo = document.getElementById("tipo");
let sexo = document.getElementById("sexo");
let fecha = document.getElementById("fechaNacimiento");
let tipo_sangre = document.getElementById("tipo_sangre");
let id_atleta = document.getElementById("id_atleta");

let btnFinalizar = document.getElementById("id_atleta");


if(id_atleta.value > 0){
    btnFinalizar.textContent = "Actualizar";
    fetch(base_url + "/Atleta/getAtleta/" + id_atleta.value)
    .then(e => e.json())
    .then((e) => {
        cedula.value = e.CEDULA;
        cedula.disabled = true;
        talla_franela.value = e.TALLA_FRANELA;
        talla_zapato.value = e.TALLA_ZAPATO;
        talla_pantalon.value = e.TALLA_PANTALON;
        estatura.value = e.ESTATURA;
        peso.value = e.PESO;
        tipo_sangre.value = e.TIPO_SANGRE;
        setTimeout(() => {
            disciplina.value = e.id_disciplina; 
        }, 100);
        if (cedula.value.trim() !== "" && cedula.value.length > 6) {
           buscarApi();
        } else {
            // Limpiar los campos si la cédula está vacía
            nombreCompleto.value = "";
            carrera.value = "";
            trayecto.value = "";
            seccion.value = "";
            tipo.value = "";
            sexo.value = ""
        }
    })
}

function llenarDisciplinas() {
    let optionDefault = document.createElement('option');
    optionDefault.value = 0;
    optionDefault.textContent = "Seleccione...";
    disciplina.appendChild(optionDefault);

    fetch(base_url + '/Disciplina/getDisciplinas')
    .then(e => e.json())
    .then((e)=>{
        let options = e // Aquí deberías agregar las opciones reales desde la base de datos
            options.forEach((option) => {
                let opt = document.createElement('option');
                opt.value = option.id_disciplina;
                opt.textContent = option.nombre_disciplina;
                disciplina.appendChild(opt);
            });
    })
    
}

cedula.addEventListener("keyup", (e) => {
    let cedula = e.target.value;
    if (cedula.trim() !== "" && cedula.length > 6) {
        buscarApi()
    } else {
        // Limpiar los campos si la cédula está vacía
        nombreCompleto.value = "";
        carrera.value = "";
        trayecto.value = "";
        seccion.value = "";
        tipo.value = "";
        sexo.value = ""
    }
});

function buscarApi() {
    fetch(base_url + "/Api/getPersona/" + cedula.value)
    .then(res => res.json())
    .then(data => {
        if (data.status) {
            let persona = data.data;
            // Actualizar los campos del formulario con los datos obtenidos
            nombreCompleto.value = persona.fullname;
            carrera.value = persona.carrera;
            trayecto.value = persona.trayecto;
            seccion.value = persona.seccion;
            tipo.value = persona.tipo;
            sexo.value = persona.sexo;
            fecha.value = persona.fecha_nac;
        } else {
            // Limpiar los campos si no se encontraron datos para la cédula ingresada
            nombreCompleto.value = "";
            carrera.value = "";
            trayecto.value = "";
            seccion.value = "";
            tipo.value = "";
            sexo.value = "";
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Manejar errores en la solicitud fetch
    });
}

formAtleta.addEventListener("submit", (e) => {

    e.preventDefault();
    let formData = new FormData(formAtleta);
    formData.append("nombreCompleto", nombreCompleto.value);

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

llenarDisciplinas();