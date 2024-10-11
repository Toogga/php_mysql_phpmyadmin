$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '../Controller/ContactController.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#message').html(response);
            },
            error: function() {
                $('#message').html('Une erreur est survenue.');
            }
        });
    });
});