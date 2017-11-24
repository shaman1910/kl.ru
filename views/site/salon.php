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

                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Информация об салоне</h2>


                </div><!--инфо. об отделе-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Руководители</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Мозгалевская Юлия Александровна</h2>
                                    <p>Ведущий менеджер по мягкой мебели</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Мозгалевская Юлия Александровна</h2>
                                        <p>Ведущий менеджер по мягкой мебели</p>
                                        <p><i class="fa fa-phone"></i> Тел. внутренний: 135</p>
                                        <p><i class="fa fa-mobile-phone"></i> Тел. корп.: +7-961-732-7979</p>
                                        <p><i class="fa fa-envelope"></i> Почта: a.gorjunov@gromada.pro</p>
                                        <p><i class="fa fa-calendar"></i> Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p class="fa fa-shopping-cart">Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p>Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--Руководители-->
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Сотрудники</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Мозгалевская Юлия Александровна</h2>
                                    <p>Ведущий менеджер по мягкой мебели</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Мозгалевская Юлия Александровна</h2>
                                        <p>Ведущий менеджер по мягкой мебели</p>
                                        <p><i class="fa fa-phone"></i> Тел. внутренний: 135</p>
                                        <p><i class="fa fa-mobile-phone"></i> Тел. корп.: +7-961-732-7979</p>
                                        <p><i class="fa fa-envelope"></i> Почта: a.gorjunov@gromada.pro</p>
                                        <p><i class="fa fa-calendar"></i> Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p class="fa fa-shopping-cart">Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p>Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p>Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p>Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="public/images/home/product1.jpg" alt="" />
                                    <h2>Иванов Иван Иванович</h2>
                                    <p>Главный бухгалтер</p>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>Иванов Иван Иванович</h2>
                                        <p>Главный бухгалтер</p>
                                        <p>Тел. внутренний: 135</p>
                                        <p>Тел. корп.: +7-961-732-7979</p>
                                        <p>Почта: a.gorjunov@gromada.pro</p>
                                        <p>Дата рождения: 16.11</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--Сотрудники-->

            </div>
        </div>
    </div>
</section>