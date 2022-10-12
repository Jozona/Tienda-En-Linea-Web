$('#changeProfile').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    Swal.fire({
        title: '¿Estas seguro?',
        text: 'Vas a cambiar la informacion de tu usario',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: $('#changeProfile').attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(result) {

                    if (result === 'true') {
                        swal({
                            icon: 'success',
                            title: 'Perfil actualizado',
                        }).then((value) => {
                            window.location.href = "perfil.php";
                        });
                    } else {
                        swal({
                            icon: 'error',
                            title: 'No fue posible actualizar tu perfil',
                        }).then((value) => {

                        });
                    }

                    if (condition) {} else {}
                }
            })
        }
      })
})