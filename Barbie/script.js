


$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault(); 

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {

                $('#newsletter-form').html('<p>Danke für deine Anmeldung!</p>');
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    });
});
