<section class="section promo">
    <div class="promo__icon frst ico"></div>
    <div class="promo__icon scnd ico"></div>
    <div class="promo__icon thrd ico"></div>
    <div class="promo__icon frth ico"></div>
    <div class="promo__icon ffth ico"></div>
    <div class="promo__icon sxth ico"></div>
    <div class="promo__icon svth ico"></div>
    <div class="promo__icon eghth"></div>
    <div class="promo__icon nnth"></div>
    <div class="promo__icon tnth"></div>
    <div class="promo__icon elvnth ico"></div>
    <div class="promo__icon twlvth ico"></div>
    <div class="promo__icon thrnth ico"></div>
    <div class="promo__icon frtnth ico"></div>
    <div class="promo__icon fftnth ico"></div>
    <div class="promo__icon sxtnth ico"></div>
    <div class="promo__icon svntnth ico"></div>
    <div class="promo__wrap">
        <header class="promo__wrap--title">
            <h1 class="promo__title">We are pleased to welcome you to <span class="accident">IG Launch</span></h1>
            <p class="promo__desc">IG Launch is an innovative business division of IMRAT GROUP, dedicated to advancing
                groundbreaking solutions across technology and sustainability sectors.</p>
        </header>
        <button class="btn primary"><span>Get Started Now</span> <span class="icon btn-arrow"></span></button>
    </div>
    <div id="grid"></div>
</section>

<script>
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
        const ANIMATION_TIME = 2000; // Movement duration in ms
        const OPACITY_TRANSITION_TIME = 1000; // Appearance/disappearance time in ms

        // Create grid
        function createGrid() {
            const cols = Math.ceil(window.innerWidth / CELL_SIZE);
            const rows = Math.ceil(window.innerHeight / CELL_SIZE);

            grid.style.gridTemplateColumns = `repeat(${cols}, ${CELL_SIZE}px)`;
            grid.style.gridTemplateRows = `repeat(${rows}, ${CELL_SIZE}px)`;

            // Delete old cell
            grid.innerHTML = '';

            for (let i = 0; i < cols * rows; i++) {
                const cell = document.createElement('div');
                cell.classList.add('cell');
                grid.appendChild(cell);
            }
        }

        // Create rays
        function createRays() {
            for (let i = 0; i < RAY_COUNT; i++) {
                const ray = document.createElement('div');
                ray.classList.add('ray'); // Basic class
                grid.appendChild(ray);
                startRayAnimation(ray); // Start ray animation
            }
        }

        // Start animation for ray
        function startRayAnimation(ray) {
            const cols = Math.ceil(window.innerWidth / CELL_SIZE);
            const rows = Math.ceil(window.innerHeight / CELL_SIZE);

            // Reset the state before starting a new animation
            ray.style.transition = 'none';
            ray.style.transform = 'none';
            ray.style.opacity = '0';

            // Random cell
            const currentCol = Math.floor(Math.random() * cols);
            const currentRow = Math.floor(Math.random() * rows);

            // Random border (0 = top, 1 = bottom, 2 = left, 3 = right)
            const edge = Math.floor(Math.random() * 4);

            // Resetting the dimensions to avoid conflict
            ray.style.width = '';
            ray.style.height = '';

            // Setting the starting position
            if (edge === 0) {
                // Top edge
                ray.className = 'ray horizontal'; // Set the class
                ray.style.width = `${CELL_SIZE}px`;
                ray.style.height = '2px';
                ray.style.left = `${currentCol * CELL_SIZE}px`;
                ray.style.top = `${currentRow * CELL_SIZE}px`;
                ray.style.transform = `translateX(0)`;
            } else if (edge === 1) {
                // Bottom edge
                ray.className = 'ray horizontal';
                ray.style.width = `${CELL_SIZE}px`;
                ray.style.height = '2px';
                ray.style.left = `${currentCol * CELL_SIZE}px`;
                ray.style.top = `${(currentRow + 1) * CELL_SIZE - 2}px`;
                ray.style.transform = `translateX(0)`;
            } else if (edge === 2) {
                // Left edge
                ray.className = 'ray vertical';
                ray.style.height = `${CELL_SIZE}px`;
                ray.style.width = '2px';
                ray.style.left = `${currentCol * CELL_SIZE}px`;
                ray.style.top = `${currentRow * CELL_SIZE}px`;
                ray.style.transform = `translateY(0)`;
            } else if (edge === 3) {
                // Right edge
                ray.className = 'ray vertical';
                ray.style.height = `${CELL_SIZE}px`;
                ray.style.width = '2px';
                ray.style.left = `${(currentCol + 1) * CELL_SIZE - 2}px`;
                ray.style.top = `${currentRow * CELL_SIZE}px`;
                ray.style.transform = `translateY(0)`;
            }

            // Starting the movement and the smooth emergence
            setTimeout(() => {
                ray.style.transition = `transform ${ANIMATION_TIME}ms linear, opacity ${OPACITY_TRANSITION_TIME}ms ease-in-out`;
                ray.style.opacity = '1'; // Smooth emergence
                if (edge === 0 || edge === 1) {
                    ray.style.transform = `translateX(${CELL_SIZE}px)`; // Horizontal movement
                } else {
                    ray.style.transform = `translateY(${CELL_SIZE}px)`; // Vertical movement
                }
            }, 50);

            // Animation completion
            setTimeout(() => {
                ray.style.opacity = '0'; // Smooth disappearance
                setTimeout(() => {
                    startRayAnimation(ray); // Starting the next cycle
                }, OPACITY_TRANSITION_TIME); // Waiting for the disappearance to be over
            }, ANIMATION_TIME);
        }

        // Initialization
        function init() {
            createGrid();
            createRays();
        }

        // Re-create the grid when the window size changes
        window.addEventListener('resize', init);

        // Launch
        init();
    });
</script>