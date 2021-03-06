/**
 * Created by VSCode.
 * User: rodrigopluz
 * Date: 11/06/20
 * Time: 20:59
 */

var app = {
    showConfirmationDialog: function(objectId) {
        if (objectId != null && typeof objectId != 'undefined') {
            $('#objectId').val(objectId);
            $('#modalDelete').modal('show');

            $('#response-message').removeClass('alert-danger');
            $('#response-message').removeClass('alert-success');
            $('#response-message').hide();
        }
    },
    doRemoveObject: function () {
        var objectId = $('#objectId').val();
        if (objectId != null && typeof objectId != 'undefined') {
            $.ajax({
                url: $('#modalDelete').data('rest'),
                type: 'POST',
                data : {'objectId' : objectId},
                beforeSend: function () {
                    $.LoadingOverlay('show');
                    $('#response-message').removeClass('alert-danger');
                    $('#response-message').removeClass('alert-success');
                },
                success: function (data) {
                    $.LoadingOverlay('hide');

                    if (data.status == 'OK') {
                        $('#response-message').addClass('alert-success');
                        $('#response-message').html(data.message);
                        $('#response-message').show();
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else {
                        $('#response-message').addClass('alert-danger');
                        $('#response-message').html(data.erros[0].message);
                        $('#response-message').show();
                    }
                },
                error: function(data) {
                    $.LoadingOverlay('hide');
                    $('#response-message').addClass('alert-danger');
                    $('#response-message').html(data.responseText);
                    $('#response-message').show();
                }
            });
        }
    }
}