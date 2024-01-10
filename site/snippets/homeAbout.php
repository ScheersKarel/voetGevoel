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
         <img class="about__img__bg" src="./resources/images/dic rectangle.png" alt="">
         <img class="about__img__isabel" src="./resources/images/img isabel.png" alt="">
         <img class="about__img__strand" src="./resources/images/img strand.png" alt="">
         <img class="about__img__hey" src="./resources/images/hey !.png" alt="">
     </div>
 </div>