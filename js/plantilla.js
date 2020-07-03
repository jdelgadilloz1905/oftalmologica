/**
 * Created by COOR.SISTEMAS on 11/12/2018.
 */
var rutaOculta = $("#rutaOculta").val();

$("#suscribete").click(function(){

    var email = $("#suscribe").val();
    if(email != ""){

        var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

        if(!expresion.test(email)){

            swal({
                    title: "¡ERROR!",
                    text: "Escriba correctamente el correo electrónico",
                    type:"error",
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                },

                function(isConfirm){

                    if(isConfirm){
                        history.back();
                    }
                });

            //return false;

        }else{

            var datos = new FormData();
            datos.append("email", email);

            $.ajax({

                url:rutaOculta+"ajax/suscribete.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                success:function(respuesta){

                    if(respuesta == "ok"){

                        $("#suscribe").empty();

                        swal({
                                title: "¡EXCELENTE!",
                                text: "Gracias por suscribirse.",
                                type:"success",
                                confirmButtonText: "Cerrar",
                                closeOnConfirm: false
                            },

                            function(isConfirm){

                                if(isConfirm){


                                    history.back();
                                }
                            });


                    }

                }

            })
        }

    }
})