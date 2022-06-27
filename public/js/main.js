
let username = document.getElementById('username');
let email = document.getElementById('email');
let password1 = document.getElementById('password1');
let password2 = document.getElementById('password2');
let form = document.getElementById("form");

let errorU = document.querySelector('.errorU');
let errorE = document.querySelector('.errorE');
let errorP1 = document.querySelector('.errorP1');
let errorP2 = document.querySelector('.errorP2');
let errorPss = document.querySelector('.errorPss');

let usernameRegex =/^[a-zA-Z\s]*$/;
let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;
let passwordRegex = /[A-Za-z]{6,16}[0-9]{2,16}$/;

form.addEventListener('submit',function(e){

    if(username.value == ""){
        
        errorU.innerHTML="Le champs username est requis.";
        errorU.style.color='red';
        e.preventDefault();
    }
    else if(!usernameRegex.test(username.value)){
        errorU.innerHTML="L'username doit contenir que des lettres";
        errorU.style.color='red';
        e.preventDefault();

    }
    else{
        errorU.innerHTML="";
    }

    if(email.value.trim()==""){
        
        errorE.innerText="Le champs email est requis.";
        errorE.style.color='red';
        e.preventDefault();
    }
    else if(!emailRegex.test(email.value)){
        errorE.innerHTML="Merci de saisir un email valid";
        errorE.style.color='red';
        e.preventDefault();
    }
    else{
        errorE.innerHTML="";
    }

    if(password1.value.trim()==""){
        
        errorP1.innerHTML="Le champs password est requis.";
        errorP1.style.color='red';
        e.preventDefault();
    }
    else if(!passwordRegex.test(password1.value)){
        errorP1.innerHTML = 'Le mot de passe doit contenir que des lettres et des chiffres'; 
        errorP1.style.color='red';
        e.preventDefault();

    }
    else{
        errorP1.innerHTML="";
    }

    if(password2.value.trim()==""){
        
        errorP2.innerHTML="Le champs password est requis.";
        errorP2.style.color='red';
        e.preventDefault();
    }
    else if(!passwordRegex.test(password2.value)){
        errorP2.innerHTML='';
        errorP2.style.color='red';
        e.preventDefault();

    }
    else{
        errorP2.innerHTML="";}

    if(password1.value!==password2.value){
        errorPss.innerHTML="Les deux mot de passe ne correspondent pas.";
        errorPss.style.color='red';
        e.preventDefault();
        
    }

    
})