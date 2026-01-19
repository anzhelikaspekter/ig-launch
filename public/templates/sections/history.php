<section class="section history">
    <div class="shadow-left"></div>
    <h2 class="history__title">IG Launch history</h2>
    <footer class="history__footer">
        <ul class="history__list">
            <li class="history__item" data-slide="1">
                <div class="card">
                    <div class="card__wrapper">
                        <div class="card__block">
                            <p class="card__subtitle">(IZTC)</p>
                            <h3 class="card__title">Invizyne Technologies, Inc.</h3>
                            <div class="card__desc-wrap">
                                <p class="card__desc">About company</p>
                                <p class="card__desc">Invizyne Technologies, Inc. operates as a synthetic biochemical company. Its SimplePath platform produces a range of chemicals, including pharmaceuticals, fuels, materials, food additives, and novel compounds, as well as consists of a series of modular cascading enzyme based biomanufacturing systems that natural processes to perform chemical conversions.</p>
                            </div>
                        </div>
                        <div class="card__block">
                            <div class="widget">
                                <?php
                                include __DIR__ . ('./../components/frst-widget.php');
                                ?>
                            </div>
                            <div class="card__info">
                                <p class="card__desc">• Status: <span class="card__tooltip card__tooltip--progress">In progress</span></p>
                                <p class="card__desc">• Investment period: <span
                                        class="card__desc card__desc--secondary">November 2024 - </span></p>
                            </div>
                        </div>
                        <a href="#" class="btn icon"><span class="icon arrow-up-right"></span></a>
                    </div>
                </div>
            </li>
            <li class="history__item" data-slide="2">
                <div class="card">
                    <div class="card__wrapper">
                        <div class="card__block">
                            <p class="card__subtitle">(XCH)</p>
                            <h3 class="card__title">XCHG Limited</h3>
                            <div class="card__desc-wrap">
                                <p class="card__desc">About company</p>
                                <p class="card__desc">XCHG Limited, together with its subsidiaries, engages in designing, manufacturing, and selling of electric vehicle (EV) chargers under the X-Charge brand name in Europe, the People’s Republic of China, the United States, and internationally.</p>
                                <p class="card__desc">The company offers direct current (DC) fast chargers under the C6 series and C7 series; and battery-integrated DC fast chargers under the Net Zero series, as well as software system upgrades and hardware maintenance services.</p>
                            </div>
                        </div>
                        <div class="card__block">
                            <div class="widget">
                                <?php
                                include __DIR__ . ('./../components/scnd-widget.php');
                                ?>
                            </div>
                            <div class="card__info">
                                <p class="card__desc">• Status: <span class="card__tooltip card__tooltip--complete">Completed</span></p>
                                <p class="card__desc">• Investment period: <span
                                        class="card__desc card__desc--secondary">September 2024 - October 2024</span></p>
                                <p class="card__desc">• Total return: <span
                                        class="card__desc card__desc--secondary">205,46%</span></p>
                            </div>
                        </div>
                        <a href="#" class="btn icon"><span class="icon arrow-up-right"></span></a>
                    </div>
                </div>
            </li>
            <li class="history__item" data-slide="2">
                <div class="card">
                    <div class="card__wrapper">
                        <div class="card__block">
                            <p class="card__subtitle">(PGHL)</p>
                            <h3 class="card__title">Primega Group Holdings Ltd</h3>
                            <div class="card__desc-wrap">
                                <p class="card__desc">About company</p>
                                <p class="card__desc">Primega Group Holdings Ltd. engages in the provision of transportation services through its subsidiary, Primega Construction. Its services include soil and rock transportation, diesel oil trading, and construction works such as excavation and lateral support works and bored piling. The company was founded on April 14, 2022 and is headquartered in Hong Kong.</p>
                            </div>
                        </div>
                        <div class="card__block">
                            <div class="widget">
                                <?php
                                include __DIR__ . ('./../components/thrd-widget.php');
                                ?>
                            </div>
                            <div class="card__info">
                                <p class="card__desc">• Status: <span class="card__tooltip card__tooltip--complete">Completed</span></p>
                                <p class="card__desc">• Investment period: <span
                                        class="card__desc card__desc--secondary">July 2024 - September 2024</span></p>
                                <p class="card__desc">• Total return: <span
                                        class="card__desc card__desc--secondary">116,81%</span></p>
                            </div>
                        </div>
                        <a href="#" class="btn icon"><span class="icon arrow-up-right"></span></a>
                    </div>
                </div>
            </li>
            <li class="history__item" data-slide="2">
                <div class="card">
                    <div class="card__wrapper">
                        <div class="card__block">
                            <p class="card__subtitle">(ACTU)</p>
                            <h3 class="card__title">Actuate Therapeutics Inc</h3>
                            <div class="card__desc-wrap">
                                <p class="card__desc">About company</p>
                                <p class="card__desc">Actuate’s lead drug, elraglusib (a novel GSK-3 inhibitor), targets multiple molecular pathways in cancer that are involved in promoting tumor growth and resistance to conventional cancer drugs such as chemotherapy. Elraglusib is also emerging as a mediator of anti-tumor immunity through the inhibition of multiple immune checkpoints and the regulation of immune cell function.</p>
                            </div>
                        </div>
                        <div class="card__block">
                            <div class="widget">
                                <?php
                                include __DIR__ . ('./../components/frth-widget.php');
                                ?>
                            </div>
                            <div class="card__info">
                                <p class="card__desc">• Status: <span class="card__tooltip card__tooltip--complete">Completed</span></p>
                                <p class="card__desc">• Investment period: <span
                                        class="card__desc card__desc--secondary">August 2024 - September 2024</span></p>
                                <p class="card__desc">• Total return: <span
                                        class="card__desc card__desc--secondary">-6,65%</span></p>
                            </div>
                        </div>
                        <a href="#" class="btn icon"><span class="icon arrow-up-right"></span></a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="pagination">
            <button class="pagination__btn pagination__btn--left"><span class="icon scrollbar-left"></span></button>
            <button class="pagination__btn pagination__btn--right"><span class="icon scrollbar-right"></span></button>
        </div>
    </footer>
    <div class="shadow-right"></div>
</section>

<script>
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
</script>