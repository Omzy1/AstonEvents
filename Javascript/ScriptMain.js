//declaring  global variables 
var isTrue = false;
var isFirstNameTrue = false;
var isLastNameTrue = false;
var isEmailTrue = false;
var isConfirmedEmailTrue = false;
var isPasswordTrue = false;
var isConfirmedPassword = false;
// signin function is onsubmit
function signin() {
  validateFName();
  validateLastName();
  validateFirstEmail();
  validateconfirmedEmail();
  validationPassword();
  validateConfirmedPass();
  // if all the validation return true then isTrue became true
  if (isFirstNameTrue && isLastNameTrue && isPasswordTrue && isEmailTrue && isConfirmedEmailTrue && isConfirmedPassword) {
    isTrue = true;
  }
  return isTrue;
}
//this is the function for the first name validation 
function validateFName() {
  var form = document.getElementById('signin');
  var fname = form.fname;
  //validating the first name
  if (fname.value.replace(/\s/g, '').length === 0) {
    nameRequired();
    isFirstNameTrue = false;
    // Error_Col_red(fname);
  } else if (fname.value.replace(/\s/g, '').length > 0 && fname.value.replace(/\s/g, '').length < 4) {
    nameShort();
    isFirstNameTrue = false;
    // Error_Col_red(fname);
  }
  else if (!fname.value.replace(/\s/g, '').match(/^[A-Za-z]+$/)) {
    checkLetters();
    isFirstNameTrue = false;
    // Error_Col_red(fname);
  } else {
    fnameEmpty();
    isFirstNameTrue = true;
    // Error_green(fname);
  }
}
//this is the function for the last name validation 
function validateLastName() {
  var form = document.getElementById('signin');
  var lname = form.lname;
  if (lname.value.replace(/\s/g, '').length === 0) {
    isLastNameTrue = false;
    lastNameRequired();
    // Error_Col_red(lname);
  } else if (lname.value.replace(/\s/g, '').length > 0 && lname.value.replace(/\s/g, '').length < 4) {
    lnameshort();
    isLastNameTrue = false;
    // Error_Col_red(lname);
  }
  else if (!lname.value.replace(/\s/g, '').match(/^[A-Za-z]+$/)) {
    isLastNameTrue = false;
    lnameLetters();
    // Error_Col_red(lname);
  } else {
    isLastNameTrue = true;
    lnameEmpty();
    // Error_green(lname);
  }
}
//this is the function for the email validation 
function validateFirstEmail() {
  var form = document.getElementById('signin');
  var email = form.email;
  // validating the email
  if (email.value.replace(/\s/g, '').length === 0) {
    emailRequired();
    isEmailTrue = false
    // Error_Col_red(email);
  }
  else if (!email.value.trim().match(/^[0-9]{9}@(aston.ac.uk)/)) {
    checkEmail();
    isEmailTrue = false;
    // Error_Col_red(email);
  } else {
    checkEmptyemail();
    isEmailTrue = true;
    // Error_green(email);
  }
}
//this is the function for the confirmed email validation 
function validateconfirmedEmail() {
  var form = document.getElementById('signin');
  let confirmedEmail = form.confirmed_email;
  var email = form.email;
  // validating the confirmed email
  if (confirmedEmail.value.replace(/\s/g, '').length === 0) {
    ConfirmedEmailRequired();
    isConfirmedEmailTrue = false;
    // Error_Col_red(confirmedEmail);
  } else if (!email.value.match(confirmedEmail.value)) {
    checkEmailMatch();
    isConfirmedEmailTrue = false;
    // Error_Col_red(confirmedEmail);
  }
  else {
    checkEmailConfEmpty();
    isConfirmedEmailTrue = true;
    // Error_green(confirmedEmail);
  }
}
//this is the function for the password validation 
function validationPassword() {
  var form = document.getElementById('signin');
  // validating the password
  let pass = form.pasw1;
  if (pass.value.length === 0) {
    passwordRequired();
    isPasswordTrue = false
    // Error_Col_red(pass);
  }
  else if (!pass.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/)) {
    checkpassword();
    isPasswordTrue = false;
    // Error_Col_red(pass);
  } else {
    emptyPassword();
    isPasswordTrue = true;
    // Error_green(pass);
  }
}
//this is the function for the confirmed password validation 
function validateConfirmedPass() {
  var form = document.getElementById('signin');
  let ConfirmedPassword = form.Confirmed_pasw1;
  let pass = form.pasw1;
  // validating the confirmed  password
  if (ConfirmedPassword.value.length === 0) {
    ConfirmedPassRequired();
    isConfirmedPassword = false
    // Error_Col_red(ConfirmedPassword);
  }
  else if (!pass.value.match(ConfirmedPassword.value)) {
    CheckPassMatch();
    isConfirmedPassword = false;
    // Error_Col_red(ConfirmedPassword);
  } else {
    confirmedPassEmpty();
    isConfirmedPassword = true;
    // Error_green(ConfirmedPassword);
  }
}
