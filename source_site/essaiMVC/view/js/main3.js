import axios from 'axios';

const form = document.getElementById('contactForm');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(form);   


    axios.post('process.php', formData)
        .then(response => {
            alert(response.data);
        })
        .catch(error => {
            alert('Une erreur est survenue');
        });
});