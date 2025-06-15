$('#loginForm').on('submit', function (e) {
    e.preventDefault();
    console.log('Form submitted via AJAX');

    var form = $(this);
    var url = form.attr('action');
    var formData = form.serialize();
    var errorDiv = $('#loginError');

    errorDiv.addClass('hidden').text('');

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val(),
            'Accept': 'application/json'
        },
        success: function (response) {
            var redirectUrl = form.data('redirect'); // Ambil dari data-redirect
            window.location.href = redirectUrl;
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                const errors = xhr.responseJSON.errors;
                const messages = Object.values(errors).flat();
                $('#loginError').text(messages[0]).removeClass('hidden');
            }
        }
    });
});