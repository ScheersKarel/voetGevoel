<div class="cta" style="background-image: url(<?= $page->ctaImg()->toFile()->url() ?>);">
    <div class="cta__content">
        <h1 class="cta__title"><?= $page->ctaTitle() ?></h1>
        <h2><?= $page->ctaSubtitle() ?></h2>
        <a href="contact"><button class="cta__button"><?= $page->ctaButton() ?></button></a>
    </div>
</div>