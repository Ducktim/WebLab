import {validateData} from "./validator.js";
import {postRequest} from "./postRequest";

const minInputValue = -3;
const maxInputValue = 5;
const input = document.querySelector('.field');
const button = document.querySelector('.validate_button')
input.addEventListener('keyup', (e)=>{
    validateData(String(e.target.value), minInputValue, maxInputValue)
})
button.addEventListener("click",() =>{
    console.log(1)
    postRequest('php/Back.php')
})