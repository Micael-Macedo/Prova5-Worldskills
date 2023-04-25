const email = document.querySelector("#email")
const password = document.querySelector("#password")
const confirmPassword = document.querySelector("#confirmPassword")
const warning = document.querySelector("#warning")
const checkEquals = document.querySelector("#checkEquals")
const checkLengh = document.querySelector("#checkLengh")
const checkNumber = document.querySelector("#checkNumber")
const checkUpper = document.querySelector("#checkUpper")
const checkLower = document.querySelector("#checkLower")
const submit = document.querySelector("#submit")
password.addEventListener('change', validatePassword)
confirmPassword.addEventListener('change', validatePassword)

function validatePassword(){
    let userPassword = password.value
    let userConfirmPassword = confirmPassword.value
    let countError = 0;
    if(userPassword !== userConfirmPassword){
        console.log("Senhas diferentes")
        countError += 1;
        checkEquals.removeAttribute("checked")
    }else{
        checkEquals.setAttribute("checked","checked")
    }
    if(userPassword.length < 8){
        console.log("Senha deve ter pelo menos 8 caracteres")
        countError += 1;
        checkLengh.removeAttribute("checked")
    }else{
        checkLengh.setAttribute("checked","checked")
    }
    if(!uppercase(userPassword)){
        console.log("Senha deve conter letra maiuscula")
        countError += 1;
        checkUpper.removeAttribute("checked")
    }else{
        checkUpper.setAttribute("checked","checked")
    }
    if(!lowercase(userPassword)){
        console.log("Senha deve conter letra minuscula")
        countError += 1;
        checkLower.removeAttribute("checked")
    }else{
        checkLower.setAttribute("checked","checked")
    }
    if(!hasNumber(userPassword)){
        console.log("Senha deve conter numero")
        countError += 1;
        checkNumber.removeAttribute("checked")
    }else{
        checkNumber.setAttribute("checked","checked")
    }
    if(countError === 0){
        submit.removeAttribute("disabled")
    }
}
function uppercase(password){
    return /[A-Z]/.test(password);
}
function lowercase(password){
    return /[a-z]/.test(password);
}
function hasNumber(password){
    return /[0-9]/.test(password);
}

