<?php

use yii\helpers\Html;

?>
<section>
    <div class="container">
        <div class="row">


            <div class="col-sm-12 padding-right">


                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center"> <h2>Поиск по запросу: <?= Html::encode($q) ?></h2></h2>

                    <?php foreach ($query as $profile): ?>

                        <?php if(!empty($profile)) : ?>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?= $profile->getImage();?>" alt="" />
                                    <h2><?= $profile->surname?> <?= $profile->name?> <?= $profile->patronymic?></h2>
                                    <p><?= $profile->position?></p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2><?= $profile->surname?> <?= $profile->name?> <?= $profile->patronymic?></h2>
                                        <p><?= $profile->position?></p>
                                        <p><i class="fa fa-phone"></i> Тел. внутренний: 135</p>
                                        <p><i class="fa fa-mobile-phone"></i> Тел. корп.: +7-961-732-7979</p>
                                        <p><i class="fa fa-envelope"></i> Почта: <?= $profile->email?></p>
                                        <p><i class="fa fa-calendar"></i> Дата рождения: <?= $profile->date_bith?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php else :?>
                    <h2>Ничего не найдено</h2>
                    <?php endif;?>
                    <?php endforeach;?>

                </div><!--Руководители -->


            </div>
        </div>
    </div>
</section>