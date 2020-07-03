/**
 * Created by COOR.SISTEMAS on 11/07/2018.
 */
$(document).ready(function(){
    var rutaOculta = $("#rutaOculta").val();

    var tabla;
    tabla=$('#tbllistado').dataTable(
        {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
            buttons: [
            ],
            "ajax":
            {
                url: rutaOculta+'ajax/especialistas.php',
                type : "get",
                dataType : "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "iDisplayLength": 5,//Paginación
            "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
        }).DataTable();


})

function citaonline(idusuario){

    window.open('http://citasonline.oftalmologica.com.ve/', '_blank');
}

$(".modalMessage").click(function(){

    $('#modalMessageventana').modal('show');
})


$(".MessageUnidad").click(function(){

    $('#modalMessageUnidad').modal('show');
})

$(".tablaRegistros tbody").on("click", ".modalMessage", function(){

    $('#modalMessageventana').modal('show');

})


//function ventanaModal(){
//
//    alert("prueba");
//}


