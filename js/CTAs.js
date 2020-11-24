
document.addEventListener("DOMContentLoaded", () =>{
const loginForm= document.querySelector("#login");
const createAccountForm= document.querySelector("#createAccount");

document.querySelector("#linkCreateAccount").addEventListener("click", e =>{
e.preventDefault();
loginForm.classList.add("form_hidden");
createAccountForm.classList.remove("form_hidden");
});

document.querySelector("#linkLogin").addEventListener("click", e =>{

e.preventDefault();
loginForm.classList.remove("form_hidden");
createAccountForm.classList.add("form_hidden");

});
});
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
$('select').selectpicker();
