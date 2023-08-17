//these functions are all about displaying the error messages when the user doesn't meet the requirment
function nameRequired() {
    document.getElementById("fname-error").innerHTML = "* First Name required *";
}
function nameShort(){
  document.getElementById("fname-error").innerHTML = "* First Name is too short *";
}
function checkLetters(){
    document.getElementById("fname-error").innerHTML = "* Letters only *";
}
function lastNameRequired() {
  document.getElementById("lname-error").innerHTML = "* Last Name required *";
}
function lnameshort(){
    document.getElementById("lname-error").innerHTML = "* Last Name is too short *";
}
function lnameLetters() {
    document.getElementById("lname-error").innerHTML = "* Letters only *";
}
function fnameEmpty() {
    document.getElementById("fname-error").innerHTML = "";
}
function lnameEmpty() {
    document.getElementById("lname-error").innerHTML = "";
}
function emailRequired() {
   document.getElementById("email-error").innerHTML = "* Aston Email required *";
}
function checkEmail() {
  document.getElementById("email-error").innerHTML = "* Please enter your Aston Email *"
}
function checkEmptyemail() {
    document.getElementById("email-error").innerHTML = "";
}
function ConfirmedEmailRequired() {
    document.getElementById("confirmed-email-error").innerHTML = "* Confirmed Email required *";
}
function checkEmailMatch() {
      document.getElementById("confirmed-email-error").innerHTML = "** Emails do not match **";
}
function checkEmailConfEmpty() {
    document.getElementById("confirmed-email-error").innerHTML = "";
}
function passwordRequired() {
  document.getElementById("password-error").innerHTML = "* Password required *";
}
function checkpassword() {
  document.getElementById("password-error").innerHTML = "* Required 8 characters-1 uppercase letter-1 lowercase letter -1 number *";
}
function emptyPassword() {
  document.getElementById("password-error").innerHTML = "";
}
function ConfirmedPassRequired() {
    document.getElementById("confirmed-pass-error").innerHTML = "* Confirmed Password required *";
}
function CheckPassMatch() {
  document.getElementById("confirmed-pass-error").innerHTML = "** Passwords do not match **";
}
function confirmedPassEmpty() {
  document.getElementById("confirmed-pass-error").innerHTML = "";
}