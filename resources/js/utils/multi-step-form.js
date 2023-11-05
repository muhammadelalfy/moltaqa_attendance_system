// validate current step
const validateCurrentStep = (step) => {
  const inputs = step.querySelectorAll("input, select, textarea");
  Array.prototype.filter.call(inputs, (input) => {
    input.addEventListener(
      "change",
      (event) => {
        if (!input.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        input.classList.add("was-validated");
      },
      false
    );
  });
};

// Multi step form
const multiStepForm = () => {
  const form = document.querySelector(".js-multi-step-form");

  if (!form) {
    return;
  }

  const steps = form.querySelectorAll(".js-step");
  const nextButtons = form.querySelectorAll(".js-next");
  const prevButtons = form.querySelectorAll(".js-prev");
  const submitButton = form.querySelector(".js-submit");

  let currentStep = 0;

  // set first step to active
  steps[currentStep].classList.add("css-step--active");

  const next = () => {
    if (validateCurrentStep(steps[currentStep])) {
      console.log("!validate form");
      return;
    }

    steps[currentStep].classList.remove("css-step--active");
    currentStep++;
    steps[currentStep].classList.add("css-step--active");
  };

  const prev = () => {
    steps[currentStep].classList.remove("css-step--active");
    currentStep--;
    steps[currentStep].classList.add("css-step--active");
  };

  const submit = () => {
    form.submit();
  };

  const init = () => {
    nextButtons.forEach((button) => {
      button.addEventListener("click", next);
    });

    prevButtons.forEach((button) => {
      button.addEventListener("click", prev);
    });

    submitButton.addEventListener("click", submit);
  };

  init();
};

multiStepForm();
