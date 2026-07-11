import './bootstrap';

const card = document.querySelector('.card');
const button = document.querySelector('.btn');

button.addEventListener('click', function() {
    event.preventDefault();
    if(card.style.display === 'none') {
        card.style.display = 'block';
    } else {
        card.style.display = 'none';
    }
})

