let formLogin = document.getElementById("formLogin");

formLogin.addEventListener("submit", (e) => {

    e.preventDefault();
    let formData = new FormData(formLogin);

    fetch(base_url + "/Login/LoginUser", {
        method: "POST",
        body: formData
    })
    .then(res => res.json())
    .then((res) => {
        if(res.status){
            //console.log(res);
            location.href = base_url + "/Home";
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