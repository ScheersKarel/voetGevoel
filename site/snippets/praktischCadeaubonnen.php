<div class="praktisch_bonnen_container">
    <div class="praktisch_bonnen">
        <h2 class="praktisch_bonnen__title">
            <?= $page->cadeaubonTitle() ?>
        </h2>
        <p class="praktisch_bonnen__text">
            <?= $page->cadeaubontext() ?>
        </p>
        <p class="praktisch_bonnen__highlight_text">
            <?= $page->cadeaubonHighlightText() ?>
        </p>
        <form action="https://formsubmit.co/<?= $page->formEmail() ?>" method="post">
            <div class="form_container">

                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">Naam</p>
                    <input type="text" class="praktisch_bonnen__form__field " name="name" required placeholder="Johan Dirckx">
                </div>
                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">E-mailadres</p>
                    <input type="email" class="praktisch_bonnen__form__field" name="email" required placeholder="johan.dirckx@gmail.com">
                </div>
                <div class="praktisch_bonnen__form">
                    <p class="praktisch_bonnen__form__text">Aantal</p>
                    <input type="text" class="praktisch_bonnen__form__field" name="aantal" required placeholder="Aantal">
                </div>
            </div>
            <input type="hidden" name="_captcha" value="false">
            <button class="praktisch_bonnen__button"><?= $page->cadeaubonButton() ?></button>


        </form>
    </div>
    <div class="praktisch_bonnen__img_container" style="background-image: url(<?= $page->cadeaubonBgImg()->toFile()->url() ?>);">
        <img src="<?= $page->cadeaubonImg()->toFile()->url() ?>" alt="" class="praktisch_bonnen__img_container__img">
    </div>
</div>