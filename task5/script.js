const acceptFilters = document.getElementById('accept');
const filterElements = {
    top: document.getElementById('top'),
    new: document.getElementById('new'),
    promo: document.getElementById('promo'),
    inStock: document.getElementById('in-stock')
};
const cards = Array.from(document.querySelectorAll('.card'));

acceptFilters.addEventListener('click', function(event) {
    let selectedFilters = [];

    for (const [key, value] of Object.entries(filterElements)) {
        if (value.checked) {
            selectedFilters.push(key);
        }
    }

    if (selectedFilters.length === 0) {
        cards.forEach(function(card) {
            card.parentElement.style.display = 'block';
        });
    } else {
        cards.forEach(function(card) {
            card.parentElement.style.display = 'none';
        });

        selectedFilters.forEach(function(filter) {
            const cardsForFilter = Array.from(document.querySelectorAll(`.card.${filter}`));
            cardsForFilter.forEach(function(card) {
                card.parentElement.style.display = 'block';
            });
        });
    }
});

document.addEventListener("DOMContentLoaded", function(){

});