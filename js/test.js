let btnAdd = document.querySelector('#add');
let btnSubtract = document.querySelector('#subtract');
let input = document.querySelector('input');

btnAdd.addEventListener('click', () =>{
	input.value = parseInt(input.value) + 1;
});

btnSubtract.addEventListener('click', () =>{
	input.value = parseInt(input.value) - 1;
});

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}