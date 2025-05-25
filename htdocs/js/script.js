$(document).ready(function() {
  $(".btn-detalle").click(function() {
    $(this).next(".descripcion").slideToggle();
  });
});
