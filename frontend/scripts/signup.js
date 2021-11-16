// Get UI elements 
const username = document.getElementById("username")
const fullname = document.getElementById("fullname")
const email = document.getElementById("email")
const yeargroup = document.getElementById("yeargroup")
const major = document.getElementById("major")
const password = document.getElementById("password")
const confirmpassword = document.getElementById("confirmpassword")
const signup_btn = document.getElementById("signup-button")

let errors = 0;

// show input error messages
function showAllErrors(displayPlace, message) {
    displayPlace.html(message);
    errors += 1;
}

// Check for input lengths for register fields 
function checkFieldLength(input, minLength, maxLength) {
    if (input.value.length <= minLength) {
        showAllErrors(input.next(), `Your ${input.attr('id')} cannot be less than characters long`)
    }
    if (input.value.length >= maxLength) {
        showAllErrors(input.next(), `Your ${input.attr('id')} cannot be more than characters long`)
    }
}

function checkRequiredFields(inputs) {
    inputs.forEach(input => {
        if (input.value == '') {
        showAllErrors(displayPlace, "This is a required field")
    }
    })
    
}

function checkUserEmail(input) {
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    if (!input.value.match(emailRegex)) {
        showAllErrors(input.next(), "This email is invalid")
    }
}

function checkMajor(input) {
    const allMajors = ['CE', 'EE', 'ME', 'ÇS', 'MIS', 'BA']; 
    if (!(allMajors.includes(input.value))) {
        showAllErrors(input.next(), "Major not found. Please check above")
    }
}

function confirmPassword(password, confirmPassword) {
    if (password.value != confirmPassword.value) {
        showAllErrors(confirmpassword.next(), "Your passwords must match tp continue")
    }
}

function validateUserInputs(e) {
    e.preventDefault() 
    errors = 0 
    document.getElementsByTagName('small').forEach(tag => {
        tag.innerHTML = ""
    })
    checkFieldLength(fullname, 5, 50)
    checkFieldLength(password, 5, 15)
    checkRequiredFields([fullname, email, yeargroup, major, password, confirmpassword])
    checkMajor(major)
    checkUserEmail(email)
    confirmPassword(password, confirmpassword)

    if (errors === 0) {
        return true
    }
    return false
}

document.getElementById("signup-button").addEventListener("click", () => {
    let isCorrect = validateUserInputs()
    if (isCorrect) location.href = "index.html"
})
