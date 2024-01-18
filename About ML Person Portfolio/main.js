function openForm(formId) {
    closeAllForms();
    document.getElementById(formId).style.display = "flex";
  }

  function closeForm(formId) {
    document.getElementById(formId).style.display = "none";
  }

  function closeAllForms() {
    var forms = document.getElementsByClassName('overlay');
    for (var i = 0; i < forms.length; i++) {
      forms[i].style.display = "none";
    }
  }

  function register() {
    const email = document.getElementById("newemail").value;
    const password = document.getElementById("newPassword").value;

    if (localStorage.getItem(email)) {
        alert("User already exists. Please choose a different email.");
    } else{
        localStorage.setItem(email, password);
        alert("Registration successful!");
    }
}

function login() {
    const loginemail = document.getElementById("email").value;
    const loginPassword = document.getElementById("password").value;


    if (localStorage.getItem(loginemail)) {
        if (localStorage.getItem(loginemail) === loginPassword) {
            alert("Login successful!!");
            window.location.href = "home.html";
        } else {
            alert("Incorrect password. Please try again.");
        }
    } else {
        alert("User not found. Please register first.");
    }
}
