// Flag telephone input plugin

var input = document.querySelector('#phone');
window.intlTelInput(input, {
  initialCountry: 'auto',
  geoIpLookup: function (callback) {
    $.get('https://ipinfo.io', function () {}, 'jsonp').always(function (resp) {
      var countryCode = resp && resp.country ? resp.country : 'us';
      callback(countryCode);
    });
  },
  utilsScript: '../../build/js/utils.js?1638200991544',
});

//DOM manipulations
const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const step3 = document.getElementById('step3');
const step4 = document.getElementById('step4');

const backButton1 = document.getElementById('back-1');
const backButton2 = document.getElementById('back-2');
const backButton3 = document.getElementById('back-3');

const continuebtn1 = document.getElementById('continue-btn1');
const continuebtn2 = document.getElementById('continue-btn2');
const continuebtn3 = document.getElementById('continue-btn3');

const submitButton = document.getElementById('submit-btn');

const mail = document.getElementById('mail');
const name = document.getElementById('name');
const surname = document.getElementById('surname');

const myInput = document.getElementById('psw');
const letter = document.getElementById('letter');
const capital = document.getElementById('capital');
const number = document.getElementById('number');
const length = document.getElementById('length');

const backBtns = [backButton1, backButton2, backButton3];
const continueBtns = [continuebtn1, continuebtn2, continuebtn3];
const steps = [step1, step2, step3, step4];

let stepNumber = 0;

continuebtn1.addEventListener('click', () => EmailValidation(mail));
continuebtn2.addEventListener('click', blankSpaceValidation);
continuebtn3.addEventListener('click', ifPasswordChecksAllConditions);

//Email validation
function EmailValidation(enteredEmail) {
  var mail_format = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

  if (enteredEmail.value.match(mail_format)) {
    nextStep();
  } else {
    blankSpaceEvent(mail, 'Invalid mail');
    return false;
  }
}
//Empty form validation on Name and Surname
function blankSpaceValidation() {
  if (name.value == '') {
    blankSpaceEvent(name, 'Fill Name');
  } else if (surname.value == '') {
    blankSpaceEvent(surname, 'Fill Surname');
  } else {
    nextStep();
  }
}

//Event on empty form
function blankSpaceEvent(input, alert) {
  input.classList.add('invalid-input');
  input.value = '';
  input.placeholder = alert;
}

///////////////Password validation////////////////////////

// When the user clicks on the password field, show the message box
myInput.onfocus = function () {
  document.getElementById('message').style.display = 'block';
};

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function () {
  document.getElementById('message').style.display = 'none';
};

// When the user starts to type something inside the password field
myInput.onkeyup = function () {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if (myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove('invalid');
    letter.classList.add('valid');
  } else {
    letter.classList.remove('valid');
    letter.classList.add('invalid');
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if (myInput.value.match(upperCaseLetters)) {
    capital.classList.remove('invalid');
    capital.classList.add('valid');
  } else {
    capital.classList.remove('valid');
    capital.classList.add('invalid');
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if (myInput.value.match(numbers)) {
    number.classList.remove('invalid');
    number.classList.add('valid');
  } else {
    number.classList.remove('valid');
    number.classList.add('invalid');
  }

  // Validate length
  if (myInput.value.length >= 8 && myInput.value.length <= 12) {
    length.classList.remove('invalid');
    length.classList.add('valid');
  } else {
    length.classList.remove('valid');
    length.classList.add('invalid');
  }
};

function ifPasswordChecksAllConditions() {
  if (
    letter.classList.contains('valid') &&
    capital.classList.contains('valid') &&
    number.classList.contains('valid') &&
    length.classList.contains('valid')
  ) {
    nextStep();
  }
}

//Remove all invalid borders

function removeInvalidBorders() {
  mail.classList.remove('invalid-input');
  name.classList.remove('invalid-input');
  surname.classList.remove('invalid-input');
}

//Navigation on form

function nextStep() {
  hideInputs(steps[stepNumber]);
  stepNumber += 1;
  showInputs(steps[stepNumber]);
  removeInvalidBorders();
}

function backwardStep() {
  hideInputs(steps[stepNumber]);
  stepNumber -= 1;
  showInputs(steps[stepNumber]);
}

backBtns.forEach((button) => {
  button.addEventListener('click', backwardStep);
});

function hideInputs(step) {
  step.classList.add('hide-inputs');
}

function showInputs(step) {
  step.classList.remove('hide-inputs');
}
