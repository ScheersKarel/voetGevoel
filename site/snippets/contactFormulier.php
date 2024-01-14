<div class="contact__container__formulier">
    <h2 class="contact__container__formulier__title">
        <?= $page->formTitle() ?>
    </h2>
    <form action="https://formsubmit.co/isabelvandeneynde@hotmail.com" method="POST">
        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Voornaam</p>
            <input class="contact__container__formulier__form__field" type="text" name="first_name" required placeholder="Voornaam">
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Achternaam</p>
            <input class="contact__container__formulier__form__field" type="text" name="last_name" required placeholder="Achternaam">
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">E-mailadres</p>
            <input class="contact__container__formulier__form__field" type="email" name="E-mailadres" required placeholder="E-mailadres">
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Telefoonnummer</p>
            <input class="contact__container__formulier__form__field" type="number" name="number" placeholder="Telefoonnummer">
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Indien u een service wil boeken, mag u hier aangeven welke </p>
            <select class="contact__container__formulier__form__field" name="service">
                <option value="none"></option>
                <option value="voetreflexologie">Voetreflexologie</option>
                <option value="energetische_vertebraal_correctie">Energetische vertebraal correctie</option>
                <option value="psychozone_harmonisering">Psychozone harmonisering</option>
            </select>
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Onderwerp bericht</p>
            <input class="contact__container__formulier__form__field" type="text" name="subject" required placeholder="Onderwerp bericht">
        </div>

        <div class="contact__container__formulier__form">
            <p class="contact__container__formulier__form__text">Bericht</p>
            <textarea class="contact__container__formulier__form__bericht" name="bericht" id="bericht" rows="10" name="message" required placeholder="Bericht"></textarea>
        </div>
        <input type="hidden" name="_captcha" value="false">
        <button class="contact__container__formulier__button"> Verzenden</button>

    </form>
</div>