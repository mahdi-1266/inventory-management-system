let showPassworBtn = document.querySelectorAll(".show-pass-btn");
// let inputPassword = document.querySelectorAll(".form-input");

showPassworBtn.forEach((btn) => {
  btn.addEventListener("click", function () {
    let inputId = btn.dataset.target;
    let passwordField = document.getElementById(inputId);

    if (passwordField.type === "password") {
      passwordField.type = "text";
    } else {
      passwordField.type = "password";
    }
  });
});
