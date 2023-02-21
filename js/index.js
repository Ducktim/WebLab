import {validateData} from "./validator.js";
import {postRequest} from "./postRequest.js";
import {getCheckedRadioButton, getCheckedSelectButton, getInputValue} from "./getValue.js";
import {clearRequest} from "./clearRequest.js";

const minInputValue = -3;
const maxInputValue = 5;
const input = document.querySelector('.field');
const buttonSubmit = document.querySelector('.validate_button');
const buttonClear = document.querySelector('.clear_button');

input.addEventListener('keyup', (e)=>{
    validateData(String(e.target.value), minInputValue, maxInputValue)
})

buttonSubmit.addEventListener("click",() =>{

    const checkedButton = getCheckedRadioButton();
    const inputValue = getInputValue();
    const selectButton = getCheckedSelectButton();

    let body = {
        "xValue": checkedButton,
        "yValue": inputValue,
        "rValue": selectButton
    }

    postRequest('php/Back.php', body)
})

buttonClear.addEventListener("click", ()=>{
    clearRequest('php/clear.php');
})