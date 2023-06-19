$(document).ready(function() {
    let element = $('.form_elem');
    let clearButton = $('.clear_button');

    $(clearButton).hide()

    function checkForm() {
        let formFilled = false;

        $(element).each(function() {
            if ($(this).val() !== null || $(this).is(':checked') || $(this).val() !== '')
                formFilled = true;
        });

        formFilled ? $(clearButton).show() : $(clearButton).hide();
    }

    $(element).on('input', function() {
        checkForm();
    });

    $(clearButton).on('click', function() {
        $(element).prop('checked', false);
        $(element).val("");
        $(element).val(null);
        $('.clear_button').hide();
    });


    // обработка состояний строки поиска

    let searchField = $('.search');
    let inputText = $('.search_text');
    let searchIcon = $('.search_icon');

    $(searchField).on('hover', function(){
        $(searchField).css('border-color', '#212121');
        $(searchIcon).css('opacity', '1');
    });

    $(searchField).on('active', function(){
        $(searchField).css('border-color', '#212121');
        $(searchIcon).css('opacity', '1');
    });

    $(inputText).on('focus', function(){
        $(searchField).css('border-color', '#212121');
        $(searchIcon).css('opacity', '1');
    });

    $(inputText).on('blur', function(){
        $(searchField).css('border-color', '#BEBEBE');
        $(searchIcon).css('opacity', '0.5');
    });

    $('.choices').on('.is-open', function () {
        $('.choices__inner').css('border-color', "#212121")
    })
});