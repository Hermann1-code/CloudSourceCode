// text animation
const textElement = document.getElementById("text");
const speedElement = document.getElementById("speed");
const text = "Welcome to the best platform for building applications of all types with modern architecture and scaling";
let index = 1;
let speed = 300 / speedElement.value;

const writeText = () => {
  textElement.innerText = text.slice(0, index);
  index++;
  if (index > text.length) index = 1;
  setTimeout(writeText, speed);
};

writeText();

speedElement.addEventListener("input", (e) => (speed = 300 / e.target.value));

// end


// tabs
const btns = document.querySelectorAll("[data-target-tab]");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    btns.forEach((btn) => btn.classList.remove("active"));

    const items = document.querySelectorAll(".item");

    items.forEach((item) => item.classList.remove("active"));
    btn.classList.add("active");
    document.querySelector(btn.dataset.targetTab).classList.add("active");
  });
});

// end

// counter
const numbers = document.querySelectorAll(".number");

numbers.forEach((num) => {
  const incrementCounter = () => {
    const target_number = +num.getAttribute("data-target-number");
    const current_number = parseInt(num.innerText);

    if (current_number < target_number) {
      num.innerText = Math.floor(current_number + target_number / 100);
      setTimeout(incrementCounter, 10);
    } else {
      num.innerText = target_number.toLocaleString();
    }
  };
  incrementCounter();
});

// end

// register

const form = document.getElementById("form-regist");
const FirstName = document.getElementById("FirstName");
const email = document.getElementById("email");
const message = document.getElementById("message");
// const password2 = document.getElementById("password2");

function showError(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-control error";
  const small = formControl.querySelector("small");
  small.innerText = message;
}

function showSuccess(input, message) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

function checkRequired(inputs) {
  inputs.forEach((input) => {
    if (input.value.trim() === "") {
      showError(input, `${getFieldName(input)} is required`);
    } else {
      showSuccess(input);
    }
  });
}

function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} must be at least ${min} characters`
    );
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} must be less than ${max} characters`
    );
  } else {
    showSuccess(input);
  }
}

function checkEmail(input) {
  // Reference: https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(String(input.value.trim()).toLowerCase())) showSuccess(input);
  else showError(input, `${getFieldName(input)} is not valid`);
}

function checkPasswordMatch(input1, input2) {
  if (input1.value !== input2.value) {
    showError(input2, "Passwords do not match");
  }
}

form.addEventListener("Submit", (e) => {
  e.preventDefault();
  checkRequired([username, email, password, password2]);
  checkLength(username, 3, 15);
  checkLength(password, 6, 25);
  checkEmail(email);
  checkPasswordMatch(password, password2);
});

// end


/* show and hide the password */
const reg_eyes = document.querySelectorAll(".eye");

reg_eyes.forEach((eye) => {
  eye.addEventListener("click", () => {
    const pass_field = eye.previousElementSibling.previousElementSibling;
    if (pass_field.type === "password") {
      pass_field.setAttribute("type", "text");
      eye.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      pass_field.setAttribute("type", "password");
      eye.classList.replace("fa-eye", "fa-eye-slash");
    }
  });
});

