const accordionHeaders = document.querySelectorAll('.accordion-header');
const accordionContents = document.querySelectorAll('.accordion-content');

for (let i = 0; i < accordionHeaders.length; i++) {
    accordionHeaders[i].addEventListener('click', function() {
        for (let j = 0; j < accordionContents.length; j++) {
            if (accordionContents[j].classList.contains('show') && accordionContents[j] !== accordionHeaders[i].nextElementSibling) {
                accordionContents[j].classList.remove('show');
                accordionHeaders[j].classList.remove('opened');
            }
        }
        const accordionContent = accordionHeaders[i].nextElementSibling;
        accordionContent.classList.toggle('show');
        accordionHeaders[i].classList.toggle('opened');
    });
}

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