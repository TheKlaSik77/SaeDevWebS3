function showAlert(message, type, placeholderSelector) {
    console.log("Showing alert:", message, type, placeholderSelector); // Ajoutez ceci pour déboguer
    var alertHTML = `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                           
                        </button>
                     </div>`;
    $(placeholderSelector).html(alertHTML).fadeTo(2000, 500).slideUp(500, function () {
        $(this).empty();
    });
}


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
                    var alertHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Modification réussie !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                           
                        </button>
                     </div>`;
                    $('#success-alert-placeholder').html(alertHTML).fadeTo(2000, 500).slideUp(500, function () {
                        $(this).empty();
                    });
                }
                else {
                    alert('Erreur lors de la mise à jour du profil : ' + response.error);

                }
            },
            error: function (error) {
                alert('Une erreur s\'est produite: ' + error);
            }

        });
    });
});


$(document).ready(function () {
    $('#resetButton').on('click', function (e) {

        var alertHTML = `<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Modification Annulée !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                           
                        </button>
                     </div>`;
        $('#danger-alert-placeholder').html(alertHTML).fadeTo(2000, 500).slideUp(500, function () {
            $(this).empty();
        });


    });
});

