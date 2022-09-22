$('#registro').on('submit',function(e){
    e.preventDefault();
var formData = new FormData(this);
   $.ajax({
       type:'POST',
       url: $('#registro').attr('action'),
       data:formData,
       cache:false,
       contentType: false,
       processData: false,
       success:function(result){
        swal({
            icon: 'success',
            title: 'Usuario registrado',
        }).then((value) => {
            window.location.href="index.php";
        });
    if(condition){}
    else{}
 }
 })
})