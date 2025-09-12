// DOMContentLoaded to load javascript when html is loaded to browser
document.addEventListener("DOMContentLoaded", (event) => {

    //contact form variables 
    const first_name = document.getElementById("first_name");
    const last_name = document.getElementById("last_name");
    const email = document.getElementById("email");
    const message = document.getElementById("message");
    const phone = document.getElementById("phone_number");

    // register form variable
    const user_first_name = document.getElementById("reg_first_name");
    const user_last_name = document.getElementById("reg_last_name");
    const user_email = document.getElementById("reg_email");
    const password = document.getElementById("password");
    const confirm_password = document.getElementById("confirm_password");

    // alert message errors
    const success_message = document.getElementById("success-message");
    const error_message = document.getElementById("error-message");

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

    // function to show error for password and confirm password
    function showErrorPassword(input, message) {
        const wrapper = input.closest(".col-md-6");
        const errorTxt = wrapper.querySelector(".error-message");
        const toggleBtn = wrapper.querySelector(".btn-toggle-password-visibility");

        if (!errorTxt) {
            console.error('No element for error message found for input:', input);
            return;
        }

        errorTxt.textContent = message;
        errorTxt.style.display = message ? 'block' : 'none';

        if (toggleBtn) {
            toggleBtn.classList.toggle("btn-invalid", !!message);
        }
    }

    // input error 
    function inputError(input) {
        input.style.border = '1px solid red';
    }

    //input success
    function inputSuccess(input) {
        input.style.border = '1px solid green';
    }

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
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 5000);

        }

    }


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
            }
        }
    }
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
            }
        }
    }

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

    // ******************************************************
    // function to validate inputs
    // function to validate user names field
    function validateNames(name, userName) {
        if (name == '') return `${userName} is Required`
        if (/[^A-Za-z]/.test(name)) return `${userName} must contain only letters`
        if (name.length < 3) return `${userName} must be at least 3 characters long`
        if (name.length > 50)
            return `${userName} must can not exceed 50 characters long.`
        return ''
    }

    // function to validate email field
    function validateEmail(email) {
        if (email == '') return 'Email is Required';
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Email is not valid';
        return '';
    }

    // function to validate phone number field
    function validatePhoneNumber(phone) {
        if (phone == '') return 'Phone number is Required';
        if (!/^\d{10}$/.test(phone)) return 'Phone number must be 10 digits long';
        return '';
    }

    //Function to validate message field
    function validateMessage(message) {
        if (message == '') return 'Message is Required';
        if (message.length < 10) return 'Message must be at least 10 characters long';
        if (message.length > 500) return 'Message must not exceed 500 characters';
        return '';
    }

    // function to validate password
    function validatePassword(password) {
        if (password == '') return 'Password is Required';
        if (password.length < 8) return 'Minimum 8 characters Required';
        if (!/[A-Z]/.test(password)) return 'Password must contain at least one uppercase letter.';
        if (!/[a-z]/.test(password)) return 'Password must contain at least one lowercase letter.';
        if (!/\d/.test(password)) return 'Password must contain at least one number.';
        if (!/[!@#$%^&*()]/.test(password)) return 'Password must contain at least one special character';
        return '';

    }

    //function to validate confirm password
    function validateConfirmPassword(confirm_password, password) {
        if (confirm_password == '') return 'Confirm Password is Required';
        if (confirm_password !== password) return 'Password does not match';
        return '';

    }

    //***********************************************************
    // input event focus listeners for input fields

    // event on focus function listener for user first name field
    function firstNameFocus(input) {
        input?.addEventListener('focusout', function () {
            const nameValue = input.value.trim();
        const errorMessage = validateNames(nameValue, 'First Name');
            showError(input, errorMessage);

        if (errorMessage === '') {
                inputSuccess(input);
        } else {
                inputError(input);
        }
    });
    }

    // event on focus listener for user last name field
    function lastNameFocus(input) {
        input?.addEventListener('focusout', function () {
            const nameValue = input.value.trim();
        const errorMessage = validateNames(nameValue, 'Last Name');
            showError(input, errorMessage);

        if (errorMessage === '') {
                inputSuccess(input);
        } else {
                inputError(input);
        }
    });
    }


    // event on focus listener for user email field
    function emailFocus(input) {
        input?.addEventListener('focusout', function () {
            const emailValue = input.value.trim();
        const errorMessage = validateEmail(emailValue);
            showError(input, errorMessage);

        if (errorMessage === '') {
                inputSuccess(input);
        } else {
                inputError(input);
        }
    });

    }


    // event on focus listener for user phone number field
    phone?.addEventListener('focusout', function () {
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
    message?.addEventListener('focusout', function () {
        const messageValue = message.value.trim();
        const errorMessage = validateMessage(messageValue);
        showError(message, errorMessage);

        if (errorMessage === '') {
            inputSuccess(message);
        } else {
            inputError(message);
        }
    });

    // event focus listener for user password field
    password.addEventListener('focusout', function () {
        const passwordValue = password.value.trim();
        const errorMessage = validatePassword(passwordValue);
        showErrorPassword(password, errorMessage);

        if (errorMessage === '') {
            inputSuccess(password);
        } else {
            inputError(password);
        }

    });

    // event focus listener for user confirmation password field
    confirm_password?.addEventListener('focusout', function () {
        const confirm_password_value = confirm_password.value.trim();
        const errorMessage = validateConfirmPassword(confirm_password_value, password.value);
        showErrorPassword(confirm_password, errorMessage);

        if (errorMessage === '') {
            inputSuccess(confirm_password);
        } else {
            inputError(confirm_password);
        }
    });

    // *******************************************************

    // password input eye function
    // Toggle for main password
    (function () {
        "use strict";

        // event listener for password visibility
        document.addEventListener("click", (e) => {
            let btn = e.target;

            if (!btn.classList.contains("btn-toggle-password-visibility")) {
                return;
            }

            let input;

            for (let item of btn.parentNode.parentNode.children) {
                if (input) {
                    break;
                }

                if (item.classList.contains("form-control")) {
                    input = item;
                    break;
                }

                if (item.classList.contains("form-floating")) {
                    for (let floatingItem of item.children) {
                        if (floatingItem.classList.contains("form-control")) {
                            input = floatingItem;
                            break;
                        }
                    }
                }
            }

            if (!input || typeof input.type === "undefined") {
                return;
            }

            if (input.type === "password") {
                input.type = "text";
            } else if (input.type === "text") {
                input.type = "password";
            }
        });
    })();


    // *********************************************************

    // save message button event 
    document.getElementById("save_message")?.addEventListener("submit", (event) => {

        // prevents default load
        event.preventDefault();

        // to check if each input valid
        if (validateNames(first_name.value) || validateNames(last_name.value) || validateEmail(email.value) || validatePhoneNumber(phone.value)) {

            //method checks all inputs are valid
            checkInputs();

            //error message to the user
            showErrorAlert("Please check if all inputs are valid");

        } else {

            //form data is an object that is to collect data and send form fields data  
            // it automatically gathers all the form inputs that the name attribute
            const formData = new FormData(event.target);

            // fetch is an api that used to make network requests such as post and get
            fetch("/process/process_contact.php", {
                method: "POST",
                body: formData
            })
                //get the api response as text
                .then(res => res.text())
                .then(data => {
                    if (data === "SUCCESS") {
                        showSuccessAlert("Thank you, your message has been received!");
                        event.target.reset();
                    } else {
                        showErrorAlert(data);
                    }
                })
                .catch(error => {
                    showErrorAlert("Request failed: " + error);
                });

            showSuccessAlert("Form submitted successful");

            // reset inputs
            event.target.reset();
            resetInputColor(first_name);
            resetInputColor(last_name);
            resetInputColor(email);
            resetInputColor(phone);
            resetInputColor(message);
        }
    });

    // register button event
    document.getElementById("register_form")?.addEventListener("submit", (event) => {

        // prevent defalt load
        event.preventDefault();

        // to check if each input valid
        if (validateNames(first_name.value) || validateNames(last_name.value) || validateEmail(email.value) || validatePassword(password.value) || validateConfirmPassword(confirm_password, password)) {

            //method checks all inputs are valid
            checkInputs();

            //error message to the user
            showErrorAlert("Please check if all inputs are valid");

        }else{

            // form object
            const formData = new FormData(event.target);

            //get the api response as text
                fetch("/controllers/register_controller.php").then(res => res.text())
                .then(data => {
                    if (data === "SUCCESS") {
                        showSuccessAlert("Thank you, your message has been received!");
                        event.target.reset();
                    } else {
                        showErrorAlert(data);
                    }
                })
                .catch(error => {
                    showErrorAlert("Request failed: " + error);
                });

            showSuccessAlert("Form submitted successful");

            // reset inputs
            event.target.reset();
        }

    });

    // login form event
    document.getElementById("login_form")?.addEventListener("submit", (event) => {

        //prevent default load
        event.preventDefault();

    });

});