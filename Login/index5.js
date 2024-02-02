let email=document.getElementById('email');
let password=document.getElementById('password');
let emailError=document.getElementById('emailError');
let passwordError=document.getElementById('passwordError');
let emailRegex=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
let passwordRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,30}$/;

emailError.textContent='';
passwordError.textContent='';
function validate(){
    if(!emailRegex.test(email.value)){
        emailError.textContent='★Warning,Email eshte shkruar gabim!';
        emailError.style.color="red";
    }
    passwordError.textContent='★Warning,Provoni nje password qe permban me shume se 8 karaktere!';
    if(!passwordRegex.test(password.value)){
        passwordError.style.color="red";
        return;
    }
    
}

