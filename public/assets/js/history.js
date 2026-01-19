document.addEventListener('DOMContentLoaded', () => {
    const historyList = document.querySelector('.history__list');
    const items = document.querySelectorAll('.history__item');
    const btnLeft = document.querySelector('.pagination__btn--left');
    const btnRight = document.querySelector('.pagination__btn--right');

    const itemWidth = items[0].offsetWidth + 20;

    let currentOffset = 0;

    const slideLeft = () => {
        if (currentOffset < 0) {
            currentOffset += itemWidth;
            historyList.style.transform = `translateX(${currentOffset}px)`;
        }
    };

    const slideRight = () => {
        const maxOffset = -itemWidth * (items.length - 1);
        if (currentOffset > maxOffset) {
            currentOffset -= itemWidth;
            historyList.style.transform = `translateX(${currentOffset}px)`;
        }
    };

    btnLeft.addEventListener('click', slideLeft);
    btnRight.addEventListener('click', slideRight);

    historyList.style.transition = 'transform 0.3s ease-in-out';
});