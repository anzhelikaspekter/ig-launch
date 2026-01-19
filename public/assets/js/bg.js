document.addEventListener('mousemove', (e) => {
    document.querySelectorAll('.ico').forEach(icon => {
        const rect = icon.getBoundingClientRect();
        const dx = e.clientX - (rect.left + rect.width / 2);
        const dy = e.clientY - (rect.top + rect.height / 2);
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < 150) {
            icon.style.transform = `translate(${dx * 0.5}px, ${dy * 0.5}px)`;
        } else {
            icon.style.transform = '';
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const grid = document.getElementById('grid');

    const CELL_SIZE = 120;
    const RAY_COUNT = 10;
    const ANIMATION_TIME = 2000;
    const OPACITY_TRANSITION_TIME = 1000;

    function createGrid() {
        const cols = Math.ceil(window.innerWidth / CELL_SIZE);
        const rows = Math.ceil(window.innerHeight / CELL_SIZE);

        grid.style.gridTemplateColumns = `repeat(${cols}, ${CELL_SIZE}px)`;
        grid.style.gridTemplateRows = `repeat(${rows}, ${CELL_SIZE}px)`;

        grid.innerHTML = '';

        for (let i = 0; i < cols * rows; i++) {
            const cell = document.createElement('div');
            cell.classList.add('cell');
            grid.appendChild(cell);
        }
    }

    function createRays() {
        for (let i = 0; i < RAY_COUNT; i++) {
            const ray = document.createElement('div');
            ray.classList.add('ray');
            grid.appendChild(ray);
            startRayAnimation(ray);
        }
    }

    function startRayAnimation(ray) {
        const cols = Math.ceil(window.innerWidth / CELL_SIZE);
        const rows = Math.ceil(window.innerHeight / CELL_SIZE);

        ray.style.transition = 'none';
        ray.style.transform = 'none';
        ray.style.opacity = '0';

        const currentCol = Math.floor(Math.random() * cols);
        const currentRow = Math.floor(Math.random() * rows);

        const edge = Math.floor(Math.random() * 4);

        ray.style.width = '';
        ray.style.height = '';

        if (edge === 0) {
            ray.className = 'ray horizontal';
            ray.style.width = `${CELL_SIZE}px`;
            ray.style.height = '2px';
            ray.style.left = `${currentCol * CELL_SIZE}px`;
            ray.style.top = `${currentRow * CELL_SIZE}px`;
            ray.style.transform = `translateX(0)`;
        } else if (edge === 1) {
            ray.className = 'ray horizontal';
            ray.style.width = `${CELL_SIZE}px`;
            ray.style.height = '2px';
            ray.style.left = `${currentCol * CELL_SIZE}px`;
            ray.style.top = `${(currentRow + 1) * CELL_SIZE - 2}px`;
            ray.style.transform = `translateX(0)`;
        } else if (edge === 2) {
            ray.className = 'ray vertical';
            ray.style.height = `${CELL_SIZE}px`;
            ray.style.width = '2px';
            ray.style.left = `${currentCol * CELL_SIZE}px`;
            ray.style.top = `${currentRow * CELL_SIZE}px`;
            ray.style.transform = `translateY(0)`;
        } else if (edge === 3) {
            ray.className = 'ray vertical';
            ray.style.height = `${CELL_SIZE}px`;
            ray.style.width = '2px';
            ray.style.left = `${(currentCol + 1) * CELL_SIZE - 2}px`;
            ray.style.top = `${currentRow * CELL_SIZE}px`;
            ray.style.transform = `translateY(0)`;
        }

        setTimeout(() => {
            ray.style.transition = `transform ${ANIMATION_TIME}ms linear, opacity ${OPACITY_TRANSITION_TIME}ms ease-in-out`;
            ray.style.opacity = '1';
            if (edge === 0 || edge === 1) {
                ray.style.transform = `translateX(${CELL_SIZE}px)`;
            } else {
                ray.style.transform = `translateY(${CELL_SIZE}px)`;
            }
        }, 50);

        setTimeout(() => {
            ray.style.opacity = '0';
            setTimeout(() => {
                startRayAnimation(ray);
            }, OPACITY_TRANSITION_TIME);
        }, ANIMATION_TIME);
    }

    function init() {
        createGrid();
        createRays();
    }

    window.addEventListener('resize', init);

    init();
});