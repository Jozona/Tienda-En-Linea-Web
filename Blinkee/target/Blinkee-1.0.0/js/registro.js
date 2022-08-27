// Aqui obtenemos el elemento del Form con el id que tu le pusiste
const form = document.getElementById("formR");
// Aqui obtenemos todos los inputs del Form
const inputs = document.querySelectorAll("#formR input");

//Las expresiones para las validaciones
const expresiones={
    nombres: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,25}$/,
    apellidos: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,25}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    usuario: /^[a-zA-Z0-9]{6,}$/,
};


//Todas las validaciones
const validar = (e) =>{
    switch(e.target.name){    
        case "contrasenia2":
            const pass1 = document.getElementById("contrasenia");
            const pass2 = document.getElementById("contrasenia2");
            if(pass1.value !== pass2.value){
                swal({
                icon: 'error',
                title: 'Algo salió mal',
                text: 'Comprueba las contraseñas',  
              }).then((value) => {
                document.getElementById("contrasenia2").value= "";
              })
            }
        break;
    }
}

//Aqui obtienes los inputs para mandarlas a validar
inputs.forEach((input)=>{
    input.addEventListener("blur", validar)

});

form.addEventListener("submit", e => {
    const nombre = document.getElementById("nombres");
    const apellido = document.getElementById("apellidos");
    const email = document.getElementById("email");
    const usuario = document.getElementById("usuario");
    const pass1 = document.getElementById("contrasenia");
    const pass2 = document.getElementById("contrasenia2");
    if(nombre.value=="" || apellido.value=="" || email.value=="" || usuario.value=="" ||pass1.value=="" || pass2.value=="" ){
        alert("Verifica tus datos")
    }

});
