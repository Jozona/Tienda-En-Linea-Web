

const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container =  document.querySelector(".container");
var form2 = document.getElementById("registro");
function handleForm(event) { event.preventDefault(); } 
form2.addEventListener('submit', handleForm);
var form3 = document.getElementById("login");
function handleForm(event) { event.preventDefault(); } 
form3.addEventListener('submit', handleForm);
sign_up_btn.addEventListener('click', ()=> {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener('click', ()=> {
    container.classList.remove("sign-up-mode");
});

// 