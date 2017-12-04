<?php
use yii\helpers\Url;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Отделы</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php foreach ($departments as $department): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?= Url::toRoute(['site/office-view', 'id'=>$department->id]) ?>"><?= $department->title ?></a></h4>

                                </div>
                            </div>
                        <?php endforeach;?>

                    </div><!--/category-products-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">

                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Информация об отделе</h2>


                </div><!--инфо. об отделе-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Руководители</h2>
                    <?php foreach ($chiefs as $profile): ?>
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
                    <?php endforeach;?>

                </div><!--Руководители -->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Сотрудники</h2>
                    <?php foreach ($profiles as $profile): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?= $profile->getImage();?>" alt="" />
                                        <h2><?= $profile->surname?> <?= $profile->name?> <?= $profile->patronymic?><?= $profile->name ?></h2>
                                        <p>Ведущий менеджер по мягкой мебели</p>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?= $profile->surname?> <?= $profile->name?> <?= $profile->patronymic?></h2>
                                            <p>Ведущий менеджер по мягкой мебели</p>
                                            <p><i class="fa fa-phone"></i> Тел. внутренний: 135</p>
                                            <p><i class="fa fa-mobile-phone"></i> Тел. корп.: +7-961-732-7979</p>
                                            <p><i class="fa fa-envelope"></i> Почта: <?= $profile->email?></p>
                                            <p><i class="fa fa-calendar"></i> Дата рождения: 16.11</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>

                </div><!--Сотрудники-->

            </div>
        </div>
    </div>
</section>