const formRadio = document.querySelector('.form-radioButton');
const selectButton = document.querySelector('#r-value-select'); // Поменять потом всё на классы
const input = document.querySelector('.field');

export const getCheckedRadioButton = () =>{

    return Array.from(formRadio.querySelectorAll('input'))
        .find(item=>item.checked)
        .value;
}

export const getCheckedSelectButton = () =>{

    return Array.from(selectButton.options)
        .find(option => option.selected)
        .value;
}

export const getInputValue = () =>{
    return input.value;
}