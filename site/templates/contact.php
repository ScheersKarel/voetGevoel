<?php snippet('nav'); ?>

<div class="contact">

    <h1 class="contact__title"><?= $page->contactTitle() ?></h1>

    <div class="contact__container">

        <?php snippet('contactContent'); ?>
        <?php snippet('contactFormulier'); ?>

    </div>

</div>

<div class="contact_map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.724232072339!2d4.605267075944225!3d51.095096640740515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3fd2e941050e1%3A0x6f4db5f2aa4e8abc!2sHerenboslaan%2012A%2C%202500%20Lier!5e0!3m2!1snl!2sbe!4v1704712553057!5m2!1snl!2sbe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php snippet('footer'); ?>