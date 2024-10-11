const form = document.getElementById('contactForm');

form.addEventListener('click', (event) => {
  event.preventDefault();

  const formData = new FormData(form); 

  fetch('ContactController.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(data => {
    console.log(data); 
    // Afficher la réponse du serveur
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
  });
});