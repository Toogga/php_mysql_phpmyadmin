<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Contact</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <form id="contactForm" method="POST">
        <input type="text" name="nom" placeholder="Nom">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <button id="monBouton" type="submit">Envoyer</button>
    </form>
    <div id="message"></div>
</body>
</html>