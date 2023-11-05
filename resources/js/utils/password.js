
const passwordInput = document.getElementById('password');
const togglePasswordButton = document.querySelector('.js-toggle-password');


if (togglePasswordButton) {
  togglePasswordButton.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      console.log(type);
      passwordInput.setAttribute('type', type);
      togglePasswordButton.innerHTML = type === 'password' ? '<i class="bi bi-eye fs-3"></i>' : '<i class="bi bi-eye-slash fs-3"></i>';
  });
}
