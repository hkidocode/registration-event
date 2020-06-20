// Selecting inputs fields in the form
const fullName = document.getElementById('p-full-name');
const organization = document.getElementById('p-organization');
const profile = document.getElementById('profile');
const phone = document.getElementById('p-phone');
const email = document.getElementById('p-email');
const country = document.getElementById('p-country');
const submitForm = document.getElementsByTagName('form')[0];

// Check full name if contains letters in a-z in lowercase
function isValidFullName(fullName) {
    const regex = /^[a-zA-Z ]+$/;
    if (regex.test(fullName.value)) {
        setSuccessFor(fullName);
    } else {
        setErrorFor(fullName, "Enter a valid full name");
    }
}
 


// Check email address
function isValidEmail(email) {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (regex.test(email.value)) {
        setSuccessFor(email);
    } else {
        setErrorFor(email, "Enter a valid email address");
    }
}

// Check the phone number
function isValidPhone(phone) {
    const regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    if (regex.test(phone.value)) {
        setSuccessFor(phone);
    } else {
        setErrorFor(phone, "Enter a valid phone number");
    }
}


// Check the input field is empty 
function isEmpty(input) {
    if (input.value !== '')
        setSuccessFor(input);
    else {
        let inputTitle = input.previousElementSibling.textContent.toLowerCase();
        setErrorFor(input, `The ${inputTitle.slice(0, inputTitle.length - 1)}can not be empty`);
    }
}

// check the student profile
function isSelectOption() {
    for (let i = 0; i < profile.options.length; i++) {
        let option = profile.options[i];
        if (option.selected === true) {
            setSuccessFor(profile);
            break;
        }
    }
}


// Add border color to input if exist and match the existing regular expression 
function setSuccessFor(input) {
    const errorMessage = input.nextElementSibling;
    input.style.border = "2px solid	#28CBBC"
    errorMessage.textContent = "";
    console.log("success");
}

// Add styles to input if not exist and not match the existing regular expression 
function setErrorFor(input, message) {
    const errorMessage = input.nextElementSibling;
    input.style.border = "2px solid	#FF0000";
    errorMessage.style.color = "#FF0000";
    errorMessage.textContent = message;
    console.log("error");
}


submitForm.addEventListener('submit', (event) => {
    event.preventDefault();
    isValidFullName(fullName);
    isEmpty(organization);
    isSelectOption();
    isValidPhone(phone);
    isValidEmail(email);
    isEmpty(country);

});