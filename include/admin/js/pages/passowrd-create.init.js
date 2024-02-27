// Password visibility toggle
Array.from(document.querySelectorAll("form .auth-pass-inputgroup")).forEach(function (s) {
  Array.from(s.querySelectorAll(".password-addon")).forEach(function (t) {
    t.addEventListener("click", function (t) {
      var e = s.querySelector(".password-input");
      if (e) {
        "password" === e.type ? e.type = "text" : e.type = "password";
      }
    });
  });
});

// Password strength indicator
var myInput = document.getElementById("password-input"),
  letter = document.getElementById("pass-lower"),
  capital = document.getElementById("pass-upper"),
  number = document.getElementById("pass-number"),
  length = document.getElementById("pass-length");

myInput.onfocus = function () {
  var passwordContain = document.getElementById("password-contain");
  if (passwordContain) {
    passwordContain.style.display = "block";
  }
};

myInput.onblur = function () {
  var passwordContain = document.getElementById("password-contain");
  if (passwordContain) {
    passwordContain.style.display = "none";
  }
};

myInput.onkeyup = function () {
  if (!myInput) return;

  myInput.value.match(/[a-z]/g) ? (letter.classList.remove("invalid"), letter.classList.add("valid")) : (letter.classList.remove("valid"), letter.classList.add("invalid"));
  myInput.value.match(/[A-Z]/g) ? (capital.classList.remove("invalid"), capital.classList.add("valid")) : (capital.classList.remove("valid"), capital.classList.add("invalid"));
  myInput.value.match(/[0-9]/g) ? (number.classList.remove("invalid"), number.classList.add("valid")) : (number.classList.remove("valid"), number.classList.add("invalid"));
  8 <= myInput.value.length ? (length.classList.remove("invalid"), length.classList.add("valid")) : (length.classList.remove("valid"), length.classList.add("invalid"));
};
