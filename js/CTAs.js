
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


// form validation

function isEmail(email){
return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function validateform(){
var name=document.signform.user.value;
var password=document.signform.password.value;
var email=document.signform.email.value;
var conpass=document.signform.conpass.value;

if (name.length<6){
  alert("Name must be at least 6 characters long ");
  return false;
}else if(password.length<6){
  alert("Password must be at least 6 characters long");
  return false;
  }
else if(password !== conpass){
  alert("Password mismatch");
  return false;
  }
  
  else if(!isEmail(email)){
    alert("Invalid Email");
    return false;
    }

}
