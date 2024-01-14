

const form = document.getElementById('form');
const username = document.getElementById('Name');
const email = document.getElementById('Email');
const password = document.getElementById('Password');

form.addEventListener('Register', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = Email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(Email).toLowerCase());
}

const validateInputs = () => {
    const NameValue = Name.value.trim();
    const EmailValue = email.value.trim();
    const PasswordValue = password.value.trim();

    if(NameValue === '') {
        setError(Name, 'Name is required');
    } else {
        setSuccess(Name);
    }

    if(EmailValue === '') {
        setError(Email, 'Email is required');
    } else if (!isValidEmail(EmailValue)) {
        setError(Email, 'Provide a valid email address');
    } else {
        setSuccess(Email);
    }

    if(PasswordValue === '') {
        setError(Password, 'Password is required');
    } else if (PasswordValue.length < 8 ) {
        setError(Password, 'Password must be at least 8 character.')
    } else {
        setSuccess(Password);
    }

};
