$(document).ready(function () {
  $(".form").submit(function (e) {
    e.preventDefault();

    let nombre = $("input[name='Nombre_completo']").val();
    let correo = $("input[name='Correo_electrónico']").val();
    let telefono = $("input[name='Número_de_teléfono']").val();
    let asunto = $("input[name='Asunto']").val();
    let mensaje = $("textarea[name='Mensaje']").val();

    if (
      nombre.trim() === "" ||
      correo.trim() === "" ||
      telefono.length == 0 ||
      asunto.trim() == "" ||
      mensaje.trim() == ""
    ) {
      $("#message-register")
        .removeClass("d-none")
        .removeClass("border-success text-success")
        .addClass("border-danger text-danger")
        .text("Campos obligatorios incompletos o vacíos");
      return;
    }

    $.ajax({
      type: "POST",
      url: "./contact.php",
      data: $(this).serialize(),
      dataType: "json",

      success: function (response) {
        if (response.success) {
          $(".new_state")[0].reset();
          alert(response.message);
        } else {
          alert(response.message);
        }
      },
    });
  });
});
