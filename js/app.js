console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

document.addEventListener('uikit:init', () => {
    // do something
    console.log("uikit:init")
})

const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {

    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();

    const usernameEl = document.querySelector('#username');
    const emailEl = document.querySelector('#email');
    const phoneEl = document.querySelector('#phone');
    const textareaEl = document.querySelector('#textarea');
    const form = document.querySelector('#submitForm');
    const isRequired = value => value === '' ? false : true;

    const checkValid = () => {
        const username = usernameEl.value.trim();
        const email = emailEl.value.trim();
        const phone = phoneEl.value.trim();
        const textarea = textareaEl.value.trim();
        if (!isRequired(username)){
            showError(usernameEl);
        }else {
            showSuccess(usernameEl);
        }

        if (!isRequired(email)){
            showError(emailEl);
        }else {
            showSuccess(emailEl);
        }

        if (!isRequired(phone)){
            showError(phoneEl);
        }else {
            showSuccess(phoneEl);
        }

        if (!isRequired(textarea)){
            showError(textareaEl);
        }else {
            showSuccess(textareaEl);
        }
    }

    const showError = (input, message) => {
        // get the form-field element
        const formField = input.parentElement;

        // add the error class
        formField.classList.remove('valid');
    };

    const showSuccess = (input, message) => {
        // get the form-field element
        const formField = input.parentElement;

        // remove the error class
        formField.classList.add('valid');
    }

    const debounce = (fn, delay = 500) => {
        let timeoutId;
        return (...args) => {
            // cancel the previous timer
            if (timeoutId) {
                clearTimeout(timeoutId);
            }
            // setup a new timer
            timeoutId = setTimeout(() => {
                fn.apply(null, args)
            }, delay);
        };
    };

    form.addEventListener('input', debounce(function (e) {
        switch (e.target.id) {
            case 'username':
                checkValid();
                break;
            case 'email':
                checkValid();
                break;
            case 'phone':
                checkValid();
                break;
            case 'textarea':
                checkValid();
                break;
        }
    }));
})








