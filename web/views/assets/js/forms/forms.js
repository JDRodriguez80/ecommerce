/**----------------------
 *!    boostrap forms validation script
 *------------------------**/
// Disable form submissions if there are invalid fields
(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();
/**----------------------
 **   function to validate form email input
 *@param event, type of event
 *@param type, type of validation
 *@return does not apply or return anything
 *------------------------**/
function validateJS(event, type) {
  if (type == "email") {
    var emailReg =
      /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var email = event.target.value;
    if (!emailReg.test(email)) {
      $(event.target).parent().addClass("was-validated");
      $(event.target)
        .parent()
        .children(".invalid-feedback")
        .html("Correo no valido");
      event.target.value = "";
      return;
    }
  }
}

/**----------------------
 **   FUNCTION TO REMEMBER EMAIL INPUT
 *------------------------**/
function rememberEmail(event) {
  if (event.target.checked) {
    localStorage.setItem("emailAdmin", $('[name="loginAdminEmail"]').val());
    localStorage.setItem("checkRem", true);
  } else {
    localStorage.removeItem("emailAdmin");
    localStorage.removeItem("checkRem");
  }
}
/**----------------------
 **   get email from local storage
 *------------------------**/
function getEmail() {
  if (localStorage.getItem("emailAdmin") != null) {
    $('[name="loginAdminEmail"]').val(localStorage.getItem("emailAdmin"));
  }
  if (
    localStorage.getItem("checkRem") != null &&
    localStorage.getItem("checkRem")
  ) {
    $("#remember").attr("checked", true);
  }
}
getEmail();
