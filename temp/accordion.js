const headers = document.querySelectorAll('.accordion-header');
headers.forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        const active = document.querySelector('.accordion-content.show');

        if (active && active !== content) {
            active.classList.remove('show');
            if (!content.classList.contains('show')) {
                setTimeout(() => content.classList.add('show'), 300);
            }
        }
        else {
            content.classList.toggle('show');
        }
    });
});