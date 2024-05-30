let formAtleta = document.getElementById("formAtleta");

document.addEventListener("DOMContentLoaded", () => {
    // alert("pudrete sistema educativo")
})

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