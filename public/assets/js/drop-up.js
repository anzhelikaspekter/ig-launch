document.addEventListener('DOMContentLoaded', () => {
    const dropUpButtons = document.querySelectorAll('.btn.drop-up');

    const scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };

    const toggleButtonVisibility = () => {
        const scrollY = window.scrollY || document.documentElement.scrollTop;
        dropUpButtons.forEach(button => {
            if (scrollY < 800) {
                button.classList.add('hide');
            } else {
                button.classList.remove('hide');
            }
        });
    };

    toggleButtonVisibility();

    window.addEventListener('scroll', toggleButtonVisibility);

    dropUpButtons.forEach(button => {
        button.addEventListener('click', scrollToTop);
    });
});