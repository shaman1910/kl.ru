<?php
use yii\helpers\Url;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Салоны</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php foreach ($departments as $department): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?= Url::toRoute(['site/salon-view', 'id'=>$department->id]) ?>"><?= $department->title ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div><!--/category-products-->
                </div>
            </div>

            <div class="col-sm-9 padding-right">


                <?php use yii\helpers\Html; ?>
                <div class="container">
                    <div class="alert alert-danger">
                        <?= nl2br(Html::encode('Обратите внимание, действуют следующие ограничения:
                                                        - не более 20 мегабайт и 30 адресатов в одном письме,
                                                        - максимум 300 мегабайт и 500 писем в одном почтовом ящике')) ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>