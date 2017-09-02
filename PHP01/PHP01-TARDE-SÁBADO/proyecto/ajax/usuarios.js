
function loadTabla(){
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'../modal/usuarios/listar.php',
       beforeSend: function(objeto){
      $("#loader").html("<img src='../img/loader.gif'>");
      },
      success:function(data){
        $("#tabla").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }


$( "#agregar" ).submit(function( event ) {
var parametros = $(this).serialize();
$.ajax({
  type: "POST",
  url: "../controlador/usuarios/agregar.php",
  data: parametros,
   beforeSend: function(objeto){
    $("#mensaje").html("Mensaje: Cargando...");
    },
  success: function(datos){
  $("#mensaje").html(datos);//mostrar mensaje 
  //$('#agregar').modal('hide'); // ocultar  formulario
  $("#agregar")[0].reset();  //resetear inputs
  $('#modal-agregar').modal('hide');  // ocultar modal
  loadTabla();
  }
});
event.preventDefault();
});




$('#modal-eliminar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activar el modal
      var codigo = button.data('codigo') // Extraer la información de atributos de datos
      var modal  = $(this)
      modal.find('#codigo').val(codigo)
    })


$( "#eliminar" ).submit(function( event ) {
    var parametros = $(this).serialize();
       $.ajax({
          type: "POST",
          url: "../controlador/usuarios/eliminar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-eliminar').modal('hide');
          loadTabla();
          }
      });
      event.preventDefault();
    });
