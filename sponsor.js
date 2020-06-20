// Selecting inputs fields in the form
const fullName = document.getElementById('s-full-name');
const organization = document.getElementById('s-organization');
const phone = document.getElementById('s-phone');
const email = document.getElementById('s-email');
const zipCode = document.getElementById('s-postal-code');
const country = document.getElementById('s-country');
const paymentMethod = document.getElementById('col2');
const cardOption = document.getElementById('card-radio');
const transferOption = document.getElementById('transfer-radio');
const submitForm = document.getElementsByTagName('form')[0];

const testedRadioButtons = [];

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

// Check the zip code 
function isValidZipCode(zipCode) {
    const regex = /^\d{5}$/;
    if (regex.test(zipCode.value)) {
        setSuccessFor(zipCode);
    } else {
        let inputTitle = zipCode.previousElementSibling.textContent.toLowerCase();
        setErrorFor(zipCode, `The ${inputTitle.slice(0, inputTitle.length - 1)}can not be empty`);
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

paymentMethod.addEventListener('change', (event) => {
    const radioButton= event.target;
    console.log(radioButton);
    if (radioButton.checked) {
        radioButton.parentElement.style.backgroundColor = "#28CBBC";
        radioButton.parentElement.style.color = "white";
        testedRadioButtons.push(radioButton);

        if(testedRadioButtons.length > 1) {
            testedRadioButtons[0].parentElement.style.backgroundColor = "white";
            testedRadioButtons[0].parentElement.style.color = "black";
            testedRadioButtons.shift();

        }
    }
});


submitForm.addEventListener('submit', (event) => {
    event.preventDefault();
    isValidFullName(fullName);
    isEmpty(organization);
    isValidPhone(phone);
    isValidEmail(email);
    isEmpty(country);
    isValidZipCode(zipCode);

});

