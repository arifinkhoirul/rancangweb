const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    item.addEventListener('click', () => {
        item.classList.toggle('active');
        faqItems.forEach(i => {
            if (i !== item) i.classList.remove('active');
        });
    });
});