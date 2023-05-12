// Открытие текста аккордеона

var headers = document.querySelectorAll('.accordion-header');
var contents = document.querySelectorAll('.accordion-content');

headers.forEach(function(header) {
    header.addEventListener('click', function() {
        var value = this.getAttribute('value');

        contents.forEach(function(content) {
            if (content.getAttribute('value') === value) {
                if (content.classList.contains('show')) {
                    content.classList.remove('show');
                } else {
                    contents.forEach(function(c) {
                        c.classList.remove('show');
                    });
                    content.classList.add('show');
                }
            } else {
                content.classList.remove('show');
            }
        });
    });
});

// Строка звезд для рейтинга при наведении

let ratingItems = document.getElementsByClassName('rating-items');

for (let i = 0; i < ratingItems.length; i++) {
    let stars = ratingItems[i].querySelectorAll('.rating-star');

    stars.forEach(function(star) {
        star.addEventListener('mouseenter', function() {
            for (let j = 0; j <= star.getAttribute('id') - 1; j++) {
                stars[j].setAttribute('src', 'images/star-filled.svg');
            }
        });

        star.addEventListener('mouseleave', function() {
            stars.forEach(function(star) {
                star.setAttribute('src', 'images/star-empty.svg');
            });
        });
    });
}