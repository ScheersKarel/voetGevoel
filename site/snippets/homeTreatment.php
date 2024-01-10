 <!-- treatment -->

 <div class="treatments">
     <h2 class="treatments__title"><?= $page->treatmentTitle() ?></h2>
     <div class="treatments__text">
         <p><?= $page->traetmentTextP1() ?></p>
         <p><?= $page->traetmentTextP2() ?></p>
         <p><?= $page->traetmentTextP3() ?></p>
     </div>

     <div class="treatment">
         <?php foreach ($page->treatmentsCard()->toStructure() as $item) : ?>
             <div class="treatment__card">
                 <img class="treatment__card__img" src="<?= $item->cardImg()->toFile()->url() ?>" alt="">
                 <h3 class="treatment__card__title"><?= $item->cardTitle() ?></h3>
                 <div class="treatment__card__line"></div>
                 <p class="treatment__card__text"><?= $item->cardText() ?></p>
                 <a href="./voetreflexologie.php"> <button class="treatment__card__button"><?= $item->cardButton() ?></button></a>
             </div>
         <?php endforeach ?>
     </div>
 </div>