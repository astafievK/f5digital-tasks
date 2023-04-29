$(document).ready(function() {
    // обработка input'в
    let formElement = $('.form_elem'); // все input'ы сразу
    let formSearch = $('.search_text'); // строка поиска
    let formSelect = $('.form_select'); // выпадающие списки
    let clearButton = $('.clear_button'); // кнопка сброса состояний

    $(clearButton).hide();

    function checkForm() {
        let formFilled = false;

        $('.form_elem').each(function() {
            if ($(this).val() !== null || $(this).is(':checked') || $(this).val() !== 'Цвет')
                formFilled = true;
        });

        formFilled ? $(clearButton).show() : $(clearButton).hide();
    }

    $(formElement).on('input', function() {
        checkForm();
    });

    $(clearButton).on('click', function() {
        $(formElement).val(null);
        $(formElement).prop('checked', false);
        $(formSelect).val("def");
        $(formSearch).val(null);
        $('.clear_button').hide();
    });


    // обработка состояний строки поиска

    let searchField = $('.search');
    let inputText = $('.search_text');
    let searchIcon = $('.search_icon')

    $(searchField).on('hover', function(){
        $(inputText).css('color', '#212121');
        $(searchIcon).css('opacity', '1');
    });

    $(inputText).on('active', function(){
        $(inputText).css('color', '#212121');
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
});