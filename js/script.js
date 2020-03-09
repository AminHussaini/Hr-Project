// form validation
(function() {
  "use strict";
  window.addEventListener(
    "load",
    function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener(
          "submit",
          function(event) {
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

$(document).ready(function() {
  $(document).on("change", ".password-toggle-btn input", function() {
    let passwordStatus = $(this)
      .closest(".input-block")
      .find(".password");
    console.log(passwordStatus);
    let password =
      passwordStatus.attr("type") === "password" ? "text" : "password";
    passwordStatus.attr("type", password);
  });

  $(document).on("click", ".login-error-box .close", function() {
    $("body").append(
      '<div class="alert alert-danger alert-dismissible fade hide pos-fixed login-error-box" role="alert">\
      <strong>Error !</strong>\
      <p class="login-error"></p>\
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
          <span aria-hidden="true">&times;</span>\
      </button>\
     </div>'
    );
  });
  $(document).on("click", ".login", function() {
    let userName = $("#validationCustomUsername").val();
    let userPassword = $(".password").val();
    if (userName.length < 3 || userPassword.length < 3) {
      if (userName.length < 3) {
        $(".login-error").text("Please enter the user name greater then 3");
        $(".login-error-box")
          .removeClass("hide")
          .addClass("show");
      }
      if (userPassword.length < 3) {
        $(".login-error").text("Please enter the user password greater then 3");
        $(".login-error-box")
          .removeClass("hide")
          .addClass("show");
        alert("pas");
      }
    } else {
      $(this).submit();
      alert("form submit");
    }
  });
});
