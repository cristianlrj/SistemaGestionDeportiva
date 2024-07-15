$( '#campos' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: true,
} );

let btnGenerar = document.getElementById('Generar');
let filtro = document.getElementById('filtro');
let filtro2 = document.getElementById('filtro2');

filtro.addEventListener('change', function() {
    let selectedValue = this.value;
    let inputContainer = document.getElementById('inputContainer');
    let inputField;

    if (selectedValue === 'Disciplina') {
        inputField = document.createElement('select');
        inputField.className = 'form-select';
        inputField.id = 'inputCampo';
        inputField.name = 'valor';
        let optionDefault = document.createElement('option');
        optionDefault.value = 0;
        optionDefault.textContent = "Seleccione Disciplina";
        inputField.appendChild(optionDefault);

        fetch(base_url + '/Disciplina/getDisciplinas')
        .then(e => e.json())
        .then((e)=>{
            let options = e // Aquí deberías agregar las opciones reales desde la base de datos
                options.forEach((option) => {
                    let opt = document.createElement('option');
                    opt.value = option.id_disciplina;
                    opt.textContent = option.nombre_disciplina;
                    inputField.appendChild(opt);
                });
        })
    } else if (selectedValue === 'Sexo') {
        inputField = document.createElement('select');
        inputField.className = 'form-select';
        inputField.id = 'inputCampo';
        inputField.name = 'valor';
        let optionDefault = document.createElement('option');
        optionDefault.value = 0;
        optionDefault.textContent = "Seleccione Sexo";
        inputField.appendChild(optionDefault);

        let options = ['Femenino', 'Masculino'];
        options.forEach(function(option) {
            let opt = document.createElement('option');
            opt.value = option;
            opt.textContent = option;
            inputField.appendChild(opt);
        });
    } else if (selectedValue === 'Ninguno') {
        inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.className = 'form-control';
        inputField.id = 'inputCampo';
        inputField.name = 'valor';
        inputField.placeholder = "";
        inputField.disabled = true;
    } else {
        inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.className = 'form-control';
        inputField.id = 'inputCampo';
        inputField.name = 'valor';
        inputField.placeholder = selectedValue;
    }

    inputContainer.innerHTML = '';
    inputContainer.appendChild(inputField);
});


filtro2.addEventListener('change', function() {
    let selectedValue = this.value;
    let inputContainer = document.getElementById('inputContainer2');
    let inputField;

    if (selectedValue === 'Disciplina') {
        inputField = document.createElement('select');
        inputField.className = 'form-select';
        inputField.id = 'inputCampo2';
        inputField.name = 'valor2';
        let optionDefault = document.createElement('option');
        optionDefault.value = 0;
        optionDefault.textContent = "Seleccione Disciplina";
        inputField.appendChild(optionDefault);

        fetch(base_url + '/Disciplina/getDisciplinas')
        .then(e => e.json())
        .then((e)=>{
            let options = e // Aquí deberías agregar las opciones reales desde la base de datos
                options.forEach((option) => {
                    let opt = document.createElement('option');
                    opt.value = option.id_disciplina;
                    opt.textContent = option.nombre_disciplina;
                    inputField.appendChild(opt);
                });
        })
    } else if (selectedValue === 'Sexo') {
        inputField = document.createElement('select');
        inputField.className = 'form-select';
        inputField.id = 'inputCampo2';
        inputField.name = 'valor2';
        let optionDefault = document.createElement('option');
        optionDefault.value = 0;
        optionDefault.textContent = "Seleccione Sexo";
        inputField.appendChild(optionDefault);

        let options = ['Femenino', 'Masculino'];
        options.forEach(function(option) {
            let opt = document.createElement('option');
            opt.value = option;
            opt.textContent = option;
            inputField.appendChild(opt);
        });
    } else if (selectedValue === 'Ninguno') {
        inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.className = 'form-control';
        inputField.id = 'inputCampo2';
        inputField.name = 'valor2';
        inputField.placeholder = "";
        inputField.disabled = true;
    } else {
        inputField = document.createElement('input');
        inputField.type = 'text';
        inputField.className = 'form-control';
        inputField.id = 'inputCampo2';
        inputField.name = 'valor2';
        inputField.placeholder = selectedValue;
    }

    inputContainer.innerHTML = '';
    inputContainer.appendChild(inputField);
});
