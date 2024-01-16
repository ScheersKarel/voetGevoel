 <!-- Wie ben ik -->
 <div class="about">
     <div class="about__content">
         <h2 class="about__content__title"><?= $page->aboutTitle() ?></h2>
         <p class="about__content__text">
             <?= $page->aboutTextFirstP() ?>
         </p>
         <p class="about__content__text">
             <?= $page->aboutTextSecondP() ?>
         </p>
         <a href="about"><button class="about__content__button"><?= $page->aboutButton() ?></button></a>
     </div>

     <div class="about__img">
         <img class="about__img__mobile" src="<?= $page->aboutImg()->toFile()->url() ?>" alt="">
     </div>
 </div>