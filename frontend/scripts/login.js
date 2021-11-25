// Get UI elements 
const email = document.getElementById("email")
const password = document.getElementById("password")
const signup_btn = document.getElementById("signup-button")

let errors = 0;

function showAllErrors(displayPlace, message) {
    displayPlace.innerHTML = message;
    errors += 1;
}

function checkFieldLength(input, minLength, maxLength) {
    if (input.value.length <= minLength) {
        showAllErrors(input.nextElementSibling, `Your ${input.name} cannot be less than ${minLength} characters long`)
    }
    if (input.value.length >= maxLength) {
        showAllErrors(input.nextElementSibling, `Your ${input.name} cannot be more than ${maxLength} characters long`)
    }
}

function checkRequiredFields(inputs) {
    inputs.forEach(input => {
        if (input.value == '') {
        showAllErrors(input.nextElementSibling, "This is a required field")
    }
    })   
}

function checkUserEmail(input) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!input.value.match(emailRegex)) {
        showAllErrors(input.nextElementSibling, "This email is invalid")
    }
}

function validateUserInputs(e) {
    console.log("event caught")
    e.preventDefault() 
    errors = 0 
    $('small').html('')
    checkFieldLength(password, 5, 15)
    checkRequiredFields([email, password])
    checkUserEmail(email)

    if (errors == 0) {
        console.log('No errors in form. Proceeding to login')
        location.href = "../backend/index.php"
    }
    return false
}
