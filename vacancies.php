<?php require_once './header.php'; ?>

<!-- START "Хлебные крошки" -->
<?php require_once './templates/breadcrumbs.php'; ?>
<!-- END "Хлебные крошки" -->

<!-- START "Какие есть вакансии" -->
<div class="vacancies">
    <div class="container">
        <div class="vacancies__inner">
            <h1>Какие есть вакансии</h1>
            <div class="vacancies__list">

                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <div class="vacancies__item">
                        <h4>Машинист автокрана</h4>
                        <div class="vacancies__item-img">
                            <img src="./assets/img/vacancies__item-img.webp" alt="vacancy <?= $i + 1 ?>">
                        </div>
                        <a href="./vacancy.php" class="vacancies__item-btn">
                            <div class="btn btn_arrow">Узнать подробней</div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- END "Какие есть вакансии" -->

<!-- START "Контакты" -->
<?php require_once './templates/contacts.php'; ?>
<!-- END "Контакты" -->

<?php require_once './footer.php'; ?>