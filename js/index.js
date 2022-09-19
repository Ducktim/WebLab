import {validateData} from "./validator.js";

const minInputValue = -3;
const maxInputValue = 5;
const input = document.querySelector('.field');

input.addEventListener('keyup', (e)=>{
    validateData(String(e.target.value), minInputValue, maxInputValue)
})