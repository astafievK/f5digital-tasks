
$(document).ready(function() {
    let formElement = $('.form_elem')
    let formSelect = $('.form_select')
    let clearButton = $('.clear_button')

    $(clearButton).hide()
    function checkForm() {
        let formFilled = false
        $('.form_elem').each(function() {
            if ($(this).val() !== '' || $(this).is(':checked')) {
                formFilled = true
            }
        })

        if (formFilled) {
            $(clearButton).show()
        } else {
            $(clearButton).hide()
        }
    }

    $(formElement).on('input', function() {
        checkForm()
    });

    $(clearButton).on('click', function() {
        $(formElement).val('')
        $(formElement).prop('checked', false);
        $(formSelect).val("def")
        $('.clear_button').hide()
    });
});