window.onload = function() {
    modal = document.getElementById('myModal');
}

function openModal() {
    modal.style.display = "block";
}

function closeModal() {
    // Get the <span> element that closes the modal
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Validar el login
function validarForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var errors = "";
    document.getElementById("msg").style.color = "red";

    if (email === "") {
        errors = "email "
        document.getElementById('email').style.backgroundColor = "red";
    }
    if (password === "") {
        errors = errors + "password"
        document.getElementById('password').style.backgroundColor = "red";
    }
    if (email != "") {
        document.getElementById('email').style.backgroundColor = "gray";
    }
    if (password != "") {
        document.getElementById('password').style.backgroundColor = "gray";
    }
    if (errors === "") {
        return true;
    } else {
        errors = "Campos obligatorios: " + errors;
        document.getElementById("msg").innerHTML = (errors);
        return false;
    }

}


//Candado de bloqueo y desbloqueo.
function blocked() {
    var candado = document.getElementById('candado'),
        isOn = false;

    candado.addEventListener('click', function(event) {
        if (isOn == false) {
            event.target.parentElement.innerHTML = '<i class="fas fa-lock-open" id="candado"></i>';
            isOn = true;
        } else {
            event.target.parentElement.innerHTML = '<i class="fas fa-lock" id="candado"></i>';
            isOn = false;
        }
    });

}

//Validar el registro
function registrarForm() {
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confpswd = document.getElementById("confpswd").value;
    var errors = "";
    var pswdmal = "";

    if (name === "") {
        errors = "name "
        document.getElementById("name").style.backgroundColor = "red";
    }
    if (surname === "") {
        errors = errors + "surname "
        document.getElementById("surname").style.backgroundColor = "red";
    }
    if (email === "") {
        errors = errors + "email "
        document.getElementById("email").style.backgroundColor = "red";
    }
    if (password === "") {
        errors = errors + "password "
        document.getElementById("password").style.backgroundColor = "red";
    }
    if (confpswd === "") {
        errors = errors + "confpswd "
        document.getElementById("confpswd").style.backgroundColor = "red";
    }
    if (password != confpswd) {
        document.getElementById("password").style.backgroundColor = "red";
        document.getElementById("confpswd").style.backgroundColor = "red";
        pswdmal = "No coinciden las contraseñas";
    }
    if (name != "") {
        document.getElementById("name").style.backgroundColor = "rgba(211, 211, 211, 0.664)";
    }
    if (surname != "") {
        document.getElementById("surname").style.backgroundColor = "rgba(211, 211, 211, 0.664)";
    }
    if (email != "") {
        document.getElementById("email").style.backgroundColor = "rgba(211, 211, 211, 0.664)";
    }
    if (password != "") {
        document.getElementById("password").style.backgroundColor = "rgba(211, 211, 211, 0.664)";
    }
    if (confpswd != "") {
        document.getElementById("confpswd").style.backgroundColor = "rgba(211, 211, 211, 0.664)";
    }
    if (errors === "" && pswdmal ==="") {
        return true;
    } else {
        errors = "Campos obligatorios: " + errors;
        document.getElementById("msg").innerHTML = (errors);
        document.getElementById("msg2").innerHTML = (pswdmal);
        return false;
    }
}
