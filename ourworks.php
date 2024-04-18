<?php require_once './header.php'; ?>

<!-- START "Хлебные крошки" -->
<?php require_once './templates/breadcrumbs.php'; ?>
<!-- END "Хлебные крошки" -->

<!-- START "Наши работы" -->
<div class="ourwork">
    <div class="container">
        <div class="ourwork__inner">
            <h1>Наши работы</h1>
            <div class="ourwork__list">

                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="ourwork__item">
                        <div class="ourwork__item-body">
                            <div class="ourwork__item-body-first">
                                <h4 class="ourwork__item-title">Разгрузка и погрузка стройматериалов</h4>
                                <div class="ourwork__item-char">
                                    <div class="ourwork__item-char-item">
                                        <div class="ourwork__item-char-item-lbl">Заказчик</div>
                                        <div class="ourwork__item-char-item-txt">Частное лицо</div>
                                    </div>
                                    <div class="ourwork__item-char-item">
                                        <div class="ourwork__item-char-item-lbl">Расположение</div>
                                        <div class="ourwork__item-char-item-txt">г.Москва</div>
                                    </div>
                                    <div class="ourwork__item-char-item">
                                        <div class="ourwork__item-char-item-lbl">Затраченное время</div>
                                        <div class="ourwork__item-char-item-txt">24ч</div>
                                    </div>
                                </div>
                                <div class="ourwork__item-desc">
                                    <p>
                                        Наш автокран профессионально и безупречно выполнил задачу по погрузке стройматериалов. С нашим опытным оператором и современным оборудованием мы обеспечили быструю и эффективную погрузку, гарантируя точность и безопасность в каждом этапе работы.
                                    </p>
                                    <p>
                                        Доверьтесь нам для эффективного решения ваших потребностей по грузоперевозке и обеспечьте успешное продвижение вашего проекта.
                                    </p>
                                </div>
                            </div>
                            <div class="ourwork__item-body-second">
                                <div class="trustus__slider">
                                    <div class="trustus__list">
                                        <div class="trustus__item">
                                            <a href="./assets/img/trustus_img1_11zon.webp" data-fancybox="ourwork-<?= $i ?>">
                                                <img decoding="async" loading="lazy" src="./assets/img/trustus_img1_11zon.webp" alt="Нам доверяют">
                                            </a>
                                        </div>
                                        <div class="trustus__item">
                                            <a href="./assets/img/trustus_img1_11zon.webp" data-fancybox="ourwork-<?= $i ?>">
                                                <img decoding="async" loading="lazy" src="./assets/img/trustus_img1_11zon.webp" alt="Нам доверяют">
                                            </a>
                                        </div>
                                        <div class="trustus__item">
                                            <a href="./assets/img/trustus_img1_11zon.webp" data-fancybox="ourwork-<?= $i ?>">
                                                <img decoding="async" loading="lazy" src="./assets/img/trustus_img1_11zon.webp" alt="Нам доверяют">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="trustus__slider-prev"></div>
                                    <div class="trustus__slider-next"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ourwork__item-footer">
                            <h4 class="ourwork__item-footer-lbl">Хотите заказать подобную услугу?</h4>
                            <div class="ourwork__item-footer-btn">
                                <div class="btn">Оставить заявку</div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="ourwork__pagination">
                <div class="ourwork__pagination-lbl">Страница</div>
                <div class="ourwork__pagination-pages">
                    <a href="#" class="ourwork__pagination-pages-item active">1</a>
                    <a href="#" class="ourwork__pagination-pages-item">2</a>
                    <a href="#" class="ourwork__pagination-pages-item">3</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END "Наши работы" -->


<?php require_once './footer.php'; ?>