

// script.js

$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault(); // Verhindert das Standardverhalten des Formulars (Seite neu laden)

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {
                // Hier kannst du die Bestätigungsnachricht einfügen
                $('#newsletter-form').html('<p>Danke für deine Anmeldung!</p>');
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});