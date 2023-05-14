const form = document.querySelector('form');
const num1 = document.querySelector('input[name=num1]');
const num2 = document.querySelector('input[name=num2]');
const operator = document.querySelector('select[name=operator]');
const result = document.querySelector('#result');

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const data = { num1: Number(num1.value), num2: Number(num2.value) };

    const selectedOperator = operator.value;
    const url = 'http://localhost:3000/' + selectedOperator;

    fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                result.textContent = data.error;
            } else {
                result.textContent = data.result;
            }
        })
        .catch(error => console.error(error));
});
