$('#login').on('submit',function(e){
    e.preventDefault();
var formData = new FormData(this);
   $.ajax({
       type:'POST',
       url: $('#login').attr('action'),
       data:formData,
       cache:false,
       contentType: false,
       processData: false,
       success:function(result){

        if(result){
        swal({
            icon: 'success',
            title: 'Iniciaste sesion',
        }).then((value) => {
            window.location.href="index.php";
        });
    }else{
        swal({
            icon: 'error',
            title: 'Credenciales incorrectas',
        }).then((value) => {
            
        });
    }

    if(condition){}
    else{}
 }
 })
})