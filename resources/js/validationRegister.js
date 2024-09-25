let formValidate = false;
let emailValidate = false;
let passwordValidate = false;
let userNameValidate = false;
let nameValidate = false;
let phoneValidate = false;
let addressValidate = false;
let PIVAValidate = false;
const registerButton = document.getElementById("submit");
registerButton.setAttribute("disabled", "disabled");

function removeAttr() {
    if (
        emailValidate &&
        passwordValidate &&
        userNameValidate &&
        nameValidate &&
        phoneValidate &&
        addressValidate &&
        PIVAValidate
    ) {
        formValidate = true;
        if (formValidate === true) {
            registerButton.removeAttribute("disabled");
        }
    }
}

// email validation
function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    return regex.test(String(email).toLowerCase());
}

// email
document.getElementById("email").addEventListener("input", function () {
    const email = this.value;

    if (!validateEmail(email)) {
        document.querySelector("#error_email>span").innerHTML =
            "Inserisci una email valida es. info@info.com";
        emailValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_email>span").innerHTML = "";
        emailValidate = true;
        removeAttr();
    }
});

// password
document.getElementById("password").addEventListener("input", function () {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("password_confirm").value;
    if (password !== confirmPassword || password.length < 8) {
        document.querySelector("#error_password>span").innerHTML =
            "La password non corrisponde e/o è minore di 8 caratteri";
        passwordValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_password>span").innerHTML = "";
        passwordValidate = true;
        removeAttr();
    }
});
// password confirm
document
    .getElementById("password_confirm")
    .addEventListener("input", function () {
        const password = document.getElementById("password").value;
        const confirmPassword =
            document.getElementById("password_confirm").value;
        if (password !== confirmPassword || password.length < 8) {
            document.querySelector("#error_password>span").innerHTML =
                "La password non corrisponde e/o è minore di 8 caratteri";
            passwordValidate = false;
            registerButton.setAttribute("disabled", "disabled");
        } else {
            document.querySelector("#error_password>span").innerHTML = "";
            passwordValidate = true;
            removeAttr();
        }
    });

// user_name
document.getElementById("user_name").addEventListener("input", function () {
    const name = document.getElementById("user_name").value;

    if (name.length < 3 || name.length > 255) {
        document.querySelector("#error_user_name>span").innerHTML =
            "User name deve essere compreso tra 3 e 255 caratteri";
        userNameValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_user_name>span").innerHTML = "";
        userNameValidate = true;
        removeAttr();
    }
});

// name restaurant
document.getElementById("name").addEventListener("input", function () {
    const name = document.getElementById("name").value;

    if (name.length < 3 || name.length > 255) {
        document.querySelector("#error_name>span").innerHTML =
            "Il nome deve essere compreso tra 3 e 255 caratteri";
        nameValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_name>span").innerHTML = "";
        nameValidate = true;
        removeAttr();
    }
});

// p_iva
document.getElementById("p_iva").addEventListener("input", function () {
    const PIVA = document.getElementById("p_iva").value;
    const PIVAPattern = /^\d{11}$/;
    if (!PIVAPattern.test(PIVA)) {
        document.querySelector("#error_p_iva>span").innerHTML =
            "La P.IVA deve essere composta da 11 cifre numeriche.";
        PIVAValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_p_iva>span").innerHTML = "";
        PIVAValidate = true;
        removeAttr();
    }
});

// address
document.getElementById("address").addEventListener("input", function () {
    const address = document.getElementById("address").value;
    if (address.length < 3 || address.length > 255) {
        document.querySelector("#error_address>span").innerHTML =
            "L'indirizzo deve essere compreso tra 3 e 255 caratteri";
        addressValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_address>span").innerHTML = "";
        addressValidate = true;
        removeAttr();
    }
});

// phone
document.getElementById("phone_number").addEventListener("input", function () {
    const phone = document.getElementById("phone_number").value;

    const phonePattern = /^\d{10}$/;

    if (!phonePattern.test(phone)) {
        document.querySelector("#error_phone_number>span").innerHTML =
            "Inserisci un numero di telefono valido di 10 cifre (solo numeri).";
        phoneValidate = false;
        registerButton.setAttribute("disabled", "disabled");
    } else {
        document.querySelector("#error_phone_number>span").innerHTML = "";
        phoneValidate = true;
        removeAttr();
    }
});

// categories
registerButton.addEventListener("click", function (event) {
    const checkboxes = document.querySelectorAll(".category-checkbox");
    let checked = false;

    checkboxes.forEach(function (checkbox) {
        if (checkbox.checked) {
            checked = true;
        }
    });

    if (!checked) {
        document.querySelector("#error_categories>span").innerHTML =
            "Seleziona almeno una categoria";
        event.preventDefault();
    } else {
        document.querySelector("#error_categories>span").innerHTML = "";
    }
});
