$(document).ready(function () {
    $('#profilForm').on('submit', function (e) {
        e.preventDefault();

        var formData = {
            biographie: $('#biographie').val(),
            pays: $('#pays').val(),
            login: $('#login').val(),
            mail: $('#mail').val()
        };

        $.ajax({
            url: '../SaeDevWebS3/modules/module_profil/modifier_profil.php',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    $('#userLogin').text(formData.login);

                    showAlert('Modification réussie !', 'success', '#success-alert-placeholder');
                } else {
                    alert('Erreur lors de la mise à jour du profil : ' + response.error);
                }
            },
            error: function (xhr, status, error) {
                alert('Une erreur s\'est produite: ' + error);
            }
        });
    });
});


$(document).ready(function () {
    $('#resetButton').on('click', function (e) {


        showAlert('Modifications annulées.', 'danger', '#danger-alert-placeholder');


    });
});

function showAlert(message, type, placeholderSelector) {
    var alertHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                           
                        </button>
                     </div>`;
    $(placeholderSelector).html(alertHTML).fadeTo(2000, 500).slideUp(500, function () {
        $(this).empty();
    });
}