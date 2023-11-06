$(document).ready(function () {
  $(".form").submit(function (e) {
    e.preventDefault();

    let nombre = $("input[name='nombre']").val();
    let correo = $("input[name='email']").val();
    let telefono = $("input[name='telefono']").val();
    let asunto = $("input[name='asunto']").val();
    let mensaje = $("textarea[name='mensaje']").val();

    if (
      nombre.trim() === "" ||
      correo.trim() === "" ||
      telefono.length == 0 ||
      asunto.trim() == "" ||
      mensaje.trim() == ""
    ) {
      alert("Campos obligatorios incompletos o vacíos.");
    }

    $.ajax({
      type: "POST",
      url: "../form/form.php",
      data: $(this).serialize(),
      dataType: "json",

      success: function (response) {
        if (response.success) {
          $(".form")[0].reset();
          alert(response.message);
        } else {
          alert(response.message);
        }
      },
    });
  });
});
