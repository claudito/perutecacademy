
function loadTabla(page){
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'../modal/articulos/listar.php',
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
  url: "../controlador/articulos/agregar.php",
  data: parametros,
   beforeSend: function(objeto){
    $("#mensaje").html("Mensaje: Cargando...");
    },
  success: function(datos){
  $("#mensaje").html(datos);//mostrar mensaje 
  //$('#agregar').modal('hide'); // ocultar  formulario
  //$("#agregar")[0].reset();  //resetear inputs
  $('#modal-agregar').modal('hide');  // ocultar modal
  loadTabla();
  }
});
event.preventDefault();
});



//data-descripcion="perno">
//descripcion="perno"


$('#modal-eliminar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activar el modal
      var codigo = button.data('codigo') // Extraer la información de atributos de datos
      var descripcion = button.data('descripcion')
      var modal = $(this)
      modal.find('#codigo').val(codigo)
      modal.find('#descripcion').val(descripcion)
    })



$( "#eliminar" ).submit(function( event ) {
    var parametros = $(this).serialize();
       $.ajax({
          type: "POST",
          url: "../controlador/articulos/eliminar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#mensaje").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#mensaje").html(datos);
          $('#modal-eliminar').modal('hide');
          loadTabla(1);
          }
      });
      event.preventDefault();
    });