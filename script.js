let Pass1 = document.querySelector('#Pass1');
let Pass2 = document.querySelector('#Pass2');
let result = document.querySelector('h5');


function checkPassword () {
    result.innerText = Pass1.value == Pass2.value ? '' : 'Password Does Not Match!';
}

Pass1.addEventListener('keyup', () => {
    if (Pass2.value.length != 0) checkPassword();
})

Pass2.addEventListener('keyup', checkPassword);