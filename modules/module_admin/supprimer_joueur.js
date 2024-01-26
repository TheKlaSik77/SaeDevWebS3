$(document).ready(function () {
    $('.suppForm').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var idUser = $(this).find('button[name="supprimer"]').val();
        var row = form.closest('tr');
        $.ajax({
            url: '../SaeDevWebS3/modules/module_admin/supprimer_joueur.php',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ idUser: idUser }),
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    showAlert('Utilisateur supprimé avec succès.', 'success');
                    // Supprime la ligne de l'utilisateur du tableau
                    row.fadeOut(400, function () {
                        $(this).remove();
                    });
                } else {
                    alert('Erreur lors de la suppression : ' + response.error);
                }
            },
            error: function (xhr, status, error) {
                alert('Une erreur s\'est produite: ' + error);
            }
        });
    });
});
function showAlert(message, type) {
    var alertPlaceholder = $('#alert-placeholder');
    var wrapper = document.createElement('div');
    wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

    alertPlaceholder.append(wrapper);

    setTimeout(function () {
        $(wrapper).fadeOut('slow', function () {
            $(this).remove();
        });
    }, 4000); // L'alerte disparaîtra après 4 secondes
}