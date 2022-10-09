var form2 = document.getElementById("registro");
function handleForm(event) { event.preventDefault(); } 
form2.addEventListener('submit', handleForm);
var form3 = document.getElementById("login");
function handleForm(event) { event.preventDefault(); } 
form3.addEventListener('submit', handleForm);
const form = document.getElementById("registro");
// Aqui obtenemos todos los inputs del Form
const inputs = document.querySelectorAll("#registro input");
//Las expresiones para las validaciones

const expresiones={
    nombre: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{1,25}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    usuario: /^.{6,}$/,
    contrasenia: /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/,
};
// Esto es para que en la fecha no se pueda ingresar una fecha mayor a la actual. 
const nacimiento = document.getElementById("fecha");
nacimiento.max = new Date().toLocaleDateString('en-ca')




//Todas las validaciones
const validar = (e) =>{
    switch(e.target.name){
        case "usuario":
            if(e.target.value == ""){
                swal({
                    icon: 'error',
                    title: 'Algo salió mal',
                    text: 'No se permiten números ni caracteres especiales en Nombre/s',
                }).then((value) => {
                  e.target.value="";
                });
            }
            else if(!expresiones.nombres.test(e.target.value)){
                 swal({
                    icon: 'error',
                    title: 'Algo salió mal',
                    text: 'No se permiten números ni caracteres especiales en Nombre/s',
                }).then((value) => {
                  e.target.value="";
                });
                
            }
        break;
        case "email":
            if(e.target.value == ""){
               
            }
            else if(!expresiones.email.test(e.target.value)){
                    swal({
                    icon: 'error',
                    title: 'Algo salió mal',
                    text: 'Formato no valido de Email',
                }).then((value) => {
                  e.target.value="";
                });
            }

        break;
        case "usuario":
            if(e.target.value == ""){
               
            }
            else if(!expresiones.usuario.test(e.target.value)){
                swal({
                    icon: 'error',
                    title: 'Algo salió mal',
                    text: 'Usuario mínimo de 6 caracteres',
                }).then((value) => {
                  e.target.value="";
                });
            }

        break;
        case "password":
            if(e.target.value == ""){
               
            }
            else if(!expresiones.contrasenia.test(e.target.value)){
                 swal({
                    icon: 'error',
                    title: 'Algo salió mal',
                    text: 'Formato no valido de Contraseña\n-Mínimo 8 caracteres\n-1 mayúscula\n-1 minúscula\n-1 número\n-1 carácter',
                }).then((value) => {
                  e.target.value="";
                });

            }

        break;
       
    }
}

//Aqui obtienes los inputs para mandarlas a validar
inputs.forEach((input)=>{
   input.addEventListener("change", validar)

});

form.addEventListener("submit", e => {
    e.preventDefault();
    const genero = document.getElementById("sexo");
    const rol = document.getElementById("rol");
    const usuario = document.getElementById("usuario");
    const nombre = document.getElementById("nombre");
    const email = document.getElementById("email");
    const pass = document.getElementById("password");
    if( genero.value=="Sexo"){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'Selecciona un sexo',
        });
    }else if(rol.value=="¿Como te quieres registrar?"){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'Selecciona un rol',
        });
    }else if(usuario.value==""){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'Escribe un usuario',
        });
    }else if(usuario.value.length <= 3){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'Usuario debe de tener mas de 3 caracteres',
        });
    }else if(nombre.value==""){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'El nombre no permite esos caracteres',
        });
    }else if(!expresiones.nombre.test(nombre.value)){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'El nombre no permite esos caracteres',
        });
    }else if(!expresiones.email.test(email.value)){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'El email no esta correcto',
        });
    }else if(email.value==""){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'El email no debe estar vacio',
        });
    }else if(pass.value==""){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'Ingresa una contraseña',
        });
    } else if(!expresiones.contrasenia.test(pass.value)){
        swal({
           icon: 'error',
           title: 'Algo salió mal',
           text: 'Formato no valido de Contraseña\n-Mínimo 8 caracteres\n-1 mayúscula\n-1 minúscula\n-1 número\n-1 carácter',
       }).then((value) => {
         e.target.value="";
       });

   }else if(email.value==""){
    swal({
        icon: 'error',
        title: 'Algo salió mal',
        text: 'El email no debe estar vacio',
    });
}else{
    window.location.href="index.html";
    }

});

const form4 = document.getElementById("login");
// Aqui obtenemos todos los inputs del Form
const inputs4 = document.querySelectorAll("#login input");
//Las expresiones para las validaciones
form4.addEventListener("submit", e => {
    e.preventDefault();
    const user = document.getElementById("usuario2");
    const pass = document.getElementById("password2");
    if(user.value==""){
        swal({
            icon: 'error',
            title: 'Algo salió mal',
            text: 'El usuario no puede estar vacio',
        });
    }else if(pass.value==""){
    swal({
        icon: 'error',
        title: 'Algo salió mal',
        text: 'La contraseña no puede estar vacio',
    });
    }else{
        
    }

});