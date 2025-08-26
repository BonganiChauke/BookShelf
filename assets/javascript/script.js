<<<<<<< HEAD
// DOMContentLoaded to load javascript when html is loaded to browser
=======
// DOMContentLoaded
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c
document.addEventListener("DOMContentLoaded", (event) => {

    //contact form variables 
    const first_name = document.getElementById("first_name");
    const last_name = document.getElementById("last_name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const phone = document.getElementById("phone_number");

<<<<<<< HEAD
    // select the form
    const form = document.getElementById("save_message");
=======
    // alert message errors
    const success_message = document.getElementById("success-message");
    const error_message = document.getElementById("error-message");
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c

    // error messages 
    // **********************************************************
    //function to show error message
    function showError(input, message) {
        const sibling = input.nextElementSibling;
        const errorTxt = sibling?.nextElementSibling;

        if (!errorTxt) {
            console.error('No element for error message found for input:', input);
            return;
        }

        errorTxt.textContent = message;
        errorTxt.style.visibility = message ? 'visible' : 'hidden';
    }

    // input error 
    function inputError(input) {
        input.style.border = '1px solid red';
    }

    //input success
    function inputSuccess(input) {
        input.style.border = '1px solid green';
    }

<<<<<<< HEAD
    //reset input color
    function resetInputColor(input) {
        input.style.border = '1px solid black';
    }

    // show success alert dialog
    function showSuccessAlert(message) {
        const successAlert = document.getElementById('alert-success');
        document.getElementById("success-message").textContent = message;
        if (successAlert) {
            successAlert.classList.remove('d-none');
=======
    // show success alert
    function showSuccessAlert() {

        const successAlert = document.getElementById('alert-success');
        
        if (successAlert) {
            successAlert.style.display = 'block';
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 5000);
        }
    }

<<<<<<< HEAD
    // show error alert dialog
    function showErrorAlert(message) {
        const errorAlert = document.getElementById('alert-danger');
        document.getElementById('error-message').textContent = message;
        if (errorAlert) {
            if (errorMessageAlert) {
                errorAlert.classList.remove("d-none");
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 5000);
=======
    // show error alert
    function showErrorAlert(message) {
        const errorAlert = document.getElementById('alert-danger');
        const errorMessageAlert = document.getElementById('error-message');
        if (errorAlert) {

            if (errorMessageAlert) {
                errorMessageAlert.textContent = message;
                errorAlert.style.display = 'block';
                setTimeout(() => {
                    errorAlert.style.display = 'none';
                }, 3000);
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c
            }
        }
    }

<<<<<<< HEAD
    //function to check all inputs if null
    function checkInputs() {
        const items = document.querySelectorAll('.item')

        for (const item of items) {
            if (item.value == '') {
                item.classList.add('error')
                item.parentElement.classList.add('error')
                item.style.border = '1px solid red'
                // this function to added required if user attempts
                // to send a message without filling any inputs
                showError(item, 'Required')
            }

            item.addEventListener('keyup', () => {
                if (item.value != '') {
                    item.classList.remove('error')
                    item.parentElement.classList.remove('error')
                    //clears error
                    showError(item, '')
                    item.style.border = '0.2px solid black'
                } else {
                    item.classList.add('error')
                    item.parentElement.classList.add('error')
                    //clears error
                    showError(item, '')
                    item.style.border = '0.2px solid black'
                }
            })
        }
    }
=======
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c

    // ******************************************************
    // function to validate inputs
    // function to validate user names field
    function validateNames(name, userName) {
        if (name == '') return `${userName} can not be empty`
        if (/[^A-Za-z]/.test(name)) return `${userName} must contain only letters`
        if (name.length < 3) return `${userName} must be at least 3 characters long`
        if (name.length > 50)
            return `${userName} must can not exceed 50 characters long.`
        return ''
    }

    // function to validate email field
    function validateEmail(email) {
        if (email == '') return 'Email can not be empty';
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Email is not valid';
        return '';
    }

    // function to validate phone number field
    function validatePhoneNumber(phone) {
        if (phone == '') return 'Phone number can not be empty';
        if (!/^\d{10}$/.test(phone)) return 'Phone number must be 10 digits long';
        return '';
    }

    //Function to validate message field
    function validateMessage(message) {
        if (message == '') return 'Message can not be empty';
        if (message.length < 10) return 'Message must be at least 10 characters long';
        if (message.length > 500) return 'Message must not exceed 500 characters';
        return '';
    }

    //***********************************************************
    // input event focus listeners for input fields

    // event on focus listener for user first name field
    first_name.addEventListener('focusout', function () {
        const nameValue = first_name.value.trim();
        const errorMessage = validateNames(nameValue, 'First Name');
        showError(first_name, errorMessage);

        if (errorMessage === '') {
            inputSuccess(first_name);
        } else {
            inputError(first_name);
        }
    });

    // event on focus listener for user last name field
    last_name.addEventListener('focusout', function () {
        const nameValue = last_name.value.trim();
        const errorMessage = validateNames(nameValue, 'Last Name');
        showError(last_name, errorMessage);

        if (errorMessage === '') {
            inputSuccess(last_name);
        } else {
            inputError(last_name);
        }
    });

    // event on focus listener for user email field
    email.addEventListener('focusout', function () {
        const emailValue = email.value.trim();
        const errorMessage = validateEmail(emailValue);
        showError(email, errorMessage);

        if (errorMessage === '') {
            inputSuccess(email);
        } else {
            inputError(email);
        }
    });

    // event on focus listener for user phone number field
    phone.addEventListener('focusout', function () {
        const phoneValue = phone.value.trim();
        const errorMessage = validatePhoneNumber(phoneValue);
        showError(phone, errorMessage);

        if (errorMessage === '') {
            inputSuccess(phone);
        } else {
            inputError(phone);
        }
    });

    // event on focus listener for user message field
    message.addEventListener('focusout', function () {
        const messageValue = message.value.trim();
        const errorMessage = validateMessage(messageValue);
        showError(message, errorMessage);

        if (errorMessage === '') {
            inputSuccess(message);
        } else {
            inputError(message);
        }
    });
<<<<<<< HEAD
    // *******************************************************
=======
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c

    // save message button event 
    document.getElementById("save_message")?.addEventListener("submit", (event) => {

        // prevent default 
        event.preventDefault();

<<<<<<< HEAD
        // //if to check all inputs fields values are valid
        // if (validateNames(first_name.value) || validateNames(last_name.value) || validateEmail(email.value) || validatePhoneNumber(phone.value)) {

        //     // check all inputs
        //     checkInputs();

        //     // error message
        //     showErrorAlert("Please check if all inputs are valid");

        // } else {
        //     // success message
        //     showSuccessAlert("Form submitted successful");

        //     // clear form fields values
        //     document.getElementById("save_message").reset();

        //     // reset input color
        //     resetInputColor(first_name);
        //     resetInputColor(last_name);
        //     resetInputColor(email);
        //     resetInputColor(phone);
        //     resetInputColor(message);
        // }

        // Send form data via AJAX
        const formData = new FormData(this);

        fetch("contact.php", {
            method: "POST",
            body: formData
        })
            .then(res => res.text())
            .then(data => {
                if (data === "SUCCESS") {
                    showSuccessAlert("Thank you, your message has been received!");
                    document.getElementById("contactForm").reset();
                } else {
                    showErrorAlert(data); // Show SQL or validation error
                }
            })
            .catch(err => {
                showErrorAlert("Request failed: " + err);
            });
=======
        //if to check all inputs fields values are valid
        if (!validateNames(first_name.value)) {
            alert('Yes');
            showSuccessAlert();
        }
>>>>>>> aa9a4e1995f0ba8671570feaf80a74ed6988dc2c

    });
});