$(document).ready(function(){
    $('.rating-star').click(function(){
        var id = $(this).attr('id'); // получаем id звезды
        var value = $(this).attr('value'); // получаем значение звезды
        $.ajax({
            url: 'update-rating.php', // путь к скрипту на сервере
            type: 'POST',
            data: {id: id, value: value}, // данные для передачи
            success: function(data){
                // действия при успешной отправке данных
                console.log(data);
            }
        });
    });
});