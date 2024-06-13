let formDisciplina = document.getElementById("formDisciplina");
let btnFinalizar = document.getElementById("finalizar");
let id_disciplina = document.getElementById("id_disciplina");

if(id_disciplina.value > 0){
    btnFinalizar.textContent = "Actualizar";
}

formDisciplina.addEventListener("submit", (e) => {

    e.preventDefault();
    let formData = new FormData(formDisciplina);

    fetch(base_url + "/Disciplina/setDisciplina", {
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
                    location.href = base_url + "/Disciplina/verDisciplinas";
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