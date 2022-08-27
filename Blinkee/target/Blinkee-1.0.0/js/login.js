$(document).ready(function(){
    $('#formR').submit(function(event){
      event.preventDefault();
      $.ajax({
          data: $(this).serialize(),
          type: "POST",
          dataType: "json",
          url: "InsertarUsuario"
      }).done(function(data){
          console.log(data);
          if(data.resultado == true){
                swal({
                icon: 'success',
                title: 'Buen trabajo!',
                text: 'Registrado correctamente', 
                button: 'Iniciar sesión',   
              }).then((value) => {
                window.location.href = "login.html";
              })
             
          }else{
              swal({
                icon: 'error',
                title: 'Algo salió mal',
                text: 'Usuario existente',  
              }).then((value) => {
                window.location.href = "registro.html";
              })
          }
      }).fail(function(jqXHR, textEstado){
          console.log("La solicitud regreso con un error: " + textEstado);
      });
    });
    
    
  
      $('#formL').submit(function(event){
      event.preventDefault();
         $.ajax({
          data: $(this).serialize(),
          type: "POST",
          dataType: "json",
          url: "Login"
      }).done(function(data){
          console.log(data);
          if(data.resultado == true){
              swal({
                icon: 'success',
                title: 'Bienvenido!',
                text: 'Credenciales correctas',  
              }).then((value) => {
                window.location.href = "index.html";
              })
          }else{
              swal({
                icon: 'error',
                title: 'Algo salió mal',
                text: 'Usuario y/o contraseña incorrecta',  
              }).then((value) => {
                window.location.href = "login.html";
              })
          }
      }).fail(function(jqXHR, textEstado){
          console.log("La solicitud regreso con un error: " + textEstado);
      });
    });
    
    
    
  
});


