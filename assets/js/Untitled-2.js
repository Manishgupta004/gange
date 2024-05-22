// validate username
function validateUsername(username) {
    const minLength = 3;
    const maxLength = 40;
    if (username.trim() === "") {
        return "Name is required!";
    } else if (username.length < minLength) {
        return " At least " + minLength + " characters long.";
    } else if (username.length > maxLength) {
        return " Max  " + maxLength + " characters long.";
    } else {
        return "";
    }
}

//validate lastName
function validateLastName(lastName) {
    if (lastName.trim() === "") {
        return "Last Name is required!";
    } else {
        return "";
    }
}

// validate Email
function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var maxLength = 40;
    if (email.trim() === "") {
        return "Email is required!";
    } else if (!emailRegex.test(email)) {
        return "Invalid email address!";
    } else if (email.length > maxLength) {
        return " Max  " + maxLength + " characters long.";
    } else {
        return "";
    }
}

// Validate Number 
function validateNumber(number) {

    var expr = /^(0|91)?[7-9][0-9]{9}$/;
    if (number.trim() === "") {
        return "Number is required!";
    }
    if (number.length !== 10) {
        return "Invalid Number: Must be 10 digits";
    }
    const numericValue = Number(number);
    if (isNaN(numericValue)) {
        return "Invalid Number";
    }
    if (!expr.test(number)) {
        return "Number should start with 7, 8, or 9";
    }
    return "";
}

// Validate Address
function validateAddress(address) {
    if (address.trim() === "") {
        return "Address is required";
    } else {
        return "";
    }
}

// Validate CheckBox
function validateCheckboxes(checkboxes) {
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            return true;
        }
    }
    return false;
}

// Validate Radio button
function validateRadioButtons(radioButtons) {
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            return true;
        }
    }
    return false;
}

// validate Password
function validatePassword(password) {
    const minLength = 8;
    const regexUpperCase = /[A-Z]/;
    const regexNumber = /\d/;
    const regexSpecialChar = /[!@#$%^&*(),.?":{}|<>]/;

    if (password.trim() === "") {
        return "Password is required.";
    } else if (password.length < minLength) {
        return "Password" + minLength + " characters long.";
    } else if (!regexUpperCase.test(password)) {
        return "required one uppercase letter.";
    } else if (!regexNumber.test(password)) {
        return "required one number.";
    } else if (!regexSpecialChar.test(password)) {
        return "required one special character.";
    } else {
        return "";
    }
}

function validatePassword1(password) {
    if (password.trim() === "") {
        return "Password is required.";
    } else {
        return "";
    }
}

function validateState(state) {
    if (state.trim() == "0") {
        return "State is required!"
    } else {
        return "";
    }
}

function validateCity(city) {
    if (city.trim() === "Select City" || city.trim() === "0") {
        return "City is required!"
    } else {
        return "";
    }
}

function onlyNumberKey(event) {
    var charCode = (event.which) ? event.which : event.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        event.preventDefault();
        return false;
    }

    var input = event.target.value;

    if (input.length >= 12) {
        event.preventDefault();
        return false;
    }

    
    return true;
}

function onlyNumberKey1(evt) {
    var inputValue = evt.target.value;
    var numericValue = inputValue.replace(/[^0-9]/g, ''); // Allow only numeric characters
    var truncatedValue = numericValue.slice(0, 10); // Limit to 10 characters
    evt.target.value = truncatedValue;
    calculation();
    if (truncatedValue.length >= 10) {
        evt.preventDefault();
    }
}

function onlyCharKey(event) {
    var key = event.key;
    if (key === "Backspace" || key === "Delete" || key === "Tab" || key === "Escape" || key === "Enter" || event.keyCode === 32) {
        return true;
    }
    if (/^[a-zA-Z]$/.test(key)) {

        var currentInput = event.target.value;
        if (currentInput.length < 40) {
            return true;
        }
    }
    event.preventDefault();
    return false;
}

function inputLength(event) {
    if (event.target.value.length < 40) {
        return true;
    }
    event.preventDefault();
    return false;
}

function validatePrice(Price) {
    if (Price.trim() === "") {
        return "Enter Price";
    }

    const numericValue = Number(Price);
    if (isNaN(numericValue)) {
        return "Invalid Format";
    }
    if (numericValue < 1) {
        return "Price cannot be below 1";
    }
    return "";
}

function validateItemDescription(Description) {
    if (Description.trim() === "") {
        return "Enter Description";
    }
    return "";
}

function validateFile(fileInput) {
    const fileName = fileInput;
    if (fileName.trim() === "") {
        return "Please choose a file.";
    }
    return "";
}

function openEmailModal() {
    $('#emailModal').modal('show');
}

function closeEmailModal() {
    $('#emailModal').modal('hide');
}

function showAlert() {
    var alertMessage = "Are you sure you want to logout?";
    var confirmLogout = confirm(alertMessage);
    if (confirmLogout) {
        window.location.href = "../session/logout.php";
    }
}

function logoutClick(event) {
    var isConfirmed = confirm("Are you sure you want to logout?");
    if (isConfirmed) {
    window.location.href = event.target.href;
    } else {
    event.preventDefault();
    }
}

