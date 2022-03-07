$("#btn_registrar").click(function () {
  registrar();
});

function mostrarConfirmacionRegistro() {
  window.location.href = "/chaquetas/registrado.php#mensaje";
}

function mostrarCargador() {
  $("#lds-default").removeClass("lds-default_hidden");
}

function ocultarCargador() {
  $("#lds-default").addClass("lds-default_hidden");
}

function registrar() {
  var nombres = $("#nombres").val().trim();
  var apellidos = $("#apellidos").val().trim();
  var dni = $("#dni").val().trim();
  var celular = $("#celular").val().trim();
  var correo = $("#correo").val().trim();
  var carrera = $("#carrera").val();
  var sede = $("#sede").val();
  var talla = $("#talla").val();
  var chbx_confirmarcion = $("#chbx_confirmarcion").prop("checked");
  var rpsta = true;

  if (nombres == "") {
    alert("Ingrese sus nombres para continuar con el registro");
    rpsta = false;
  } else if (apellidos == "") {
    alert({ html: "Ingrese sus apellidos para continuar con el registro" });
    rpsta = false;
  } else if (dni == "") {
    alert("Ingrese su DNI para continuar con el registro");
    rpsta = false;
  } else if (celular == "") {
    alert("Ingrese su número celular para continuar con el registro");
    rpsta = false;
  } else if (
    correo == "" ||
    correo.indexOf("@", 0) == -1 ||
    correo.indexOf(".", 0) == -1
  ) {
    if (correo != "") {
      alert(
        "Ingrese un correo electrónico válido para continuar con el registro"
      );
    } else {
      alert("Ingrese su correo electrónico para continuar con el registro");
    }
    rpsta = false;
  } else if (carrera == null) {
    alert("Seleccione una carrera para continuar");
    rpsta = false;
  } else if (talla == null) {
    alert("Seleccione una talla para continuar");
    rpsta = false;
  } else if (sede == null) {
    alert("Seleccione una sede para continuar");
    rpsta = false;
  } else if (!chbx_confirmarcion) {
    alert("Marque las casilla para continuar con el registro");
    rpsta = false;
  }

  if (rpsta) {
    var form = $("#form_inscripcion").serializeArray();

    $.ajax({
      type: "POST",
      url: "model/registro.php",
      data: $.param(form),
      contentType: "application/x-www-form-urlencoded;charset=utf-8",

      beforeSend: function () {
        mostrarCargador();
      },

      error: function () {
        alert("Ha ocurrido un error cierra la pagina y vuelve a intentarlo");
      },

      success: function (data) {
        setTimeout(() => {

          if (data == "true") {
            mostrarConfirmacionRegistro();
          } else if (data == "false") {
            ocultarCargador();
            alert(
              "Usted aún no se encuentra con programación."
            );
          } else if (data == "error") {
            ocultarCargador();
            alert(
              "Ha habido inconvenientes en el registro, recargue la pagina y vuelva a intentarlo."
            );
            
          } else if (data == "existe") {
            ocultarCargador();
            alert(
              "Usted ya se encuentra registrado. Pronto nos comunicaremos contigo para la entrega de la chaqueta, gracias."
            );
          }

        }, 1000);
      },
    });
  }
}