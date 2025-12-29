
document.addEventListener('DOMContentLoaded', function(){

/*6. Conditionals (if-else statements)*/
/*
var userAgeInput = prompt("Please enter your age:");
var userAge = parseInt(userAgeInput);
if(!isNaN(userAge)){
   if(userAge>=18){
    alert("You are eligible to sign up.");
   }else{
    alert("You must be at least 18 years old to sign up.");
     window.location.href = "Homepage.html"; 
   }
}else{
    alert("Please enter a valid age using numbers.");
}
 */
/*7. Loops (for or while loop)*/
  console.log("print numbers from 1 to 10");
 for(var i=1; i<=10; i++){
  console.log(i);
 }

 /*9. Form Validation*/
  const signupForm = document.getElementById('signupForm');
  const emailField = document.getElementById('email');
  const passwordField = document.getElementById('password');
 const confirmPasswordField = document.getElementById('confirmPassword');

  signupForm.addEventListener('submit', function(event){
    if(emailField.value.trim() === ''){
      event.preventDefault();
      alert("Please fill the email field");
      return;
    }
    /*A special addition from me, check if confirm password match password*/
    if(passwordField.value !== confirmPasswordField.value){
    event.preventDefault();
    alert("Passwords do not match, Try again");
  }
  }
);
});