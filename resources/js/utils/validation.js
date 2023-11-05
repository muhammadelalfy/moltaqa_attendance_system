// validation rules for the forms
export const required = value => !!value || 'Required.';
export const email = value => /.+@.+\..+/.test(value) || 'Invalid e-mail.';
export const minLength = value => value.length >= 6 || 'Min 6 characters.';
export const maxLength = value => value.length <= 20 || 'Max 20 characters.';
export const password = value => /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/.test(value) || 'Invalid password.';
export const passwordMatch = (value, other) => value === other || 'Passwords do not match.';
export const number = value => !isNaN(parseFloat(value)) && isFinite(value) || 'Not a number.';
export const positive = value => value >= 0 || 'Must be positive.';
export const date = value => !isNaN(Date.parse(value)) || 'Invalid date.';
export const dateInFuture = value => Date.parse(value) > Date.now() || 'Date must be in the future.';
export const dateInPast = value => Date.parse(value) < Date.now() || 'Date must be in the past.';
export const dateInFutureOrToday = value => Date.parse(value) >= Date.now() || 'Date must be in the future or today.';

// Path: resources/js/utils/multi-step-form.js
// validate form on submit and show error messages

const validateForm = () => {
  const forms = document.querySelectorAll('.js-validate');

  forms.forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
}

validateForm();


