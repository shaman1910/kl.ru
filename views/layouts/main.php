<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAsset;


PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header id="header"><!--header-->


    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="/public/images/home/logo.png" alt="" /></a>
                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <?php if(Yii::$app->user->isGuest):?>
                                <li><a href="<?= Url::toRoute(['site/signup'])?>"><i class="fa fa-edit"></i>Регистрация</a></li>
                                <li><a href="<?= Url::toRoute(['site/login'])?>"><i class="fa fa-sign-in"></i>Вход</a></li>
                            <?php else: ?>
                                <li><a href="<?= Url::toRoute(['profile/index'])?>"><i class="fa fa-user"></i> Профиль</a></li>
                                <li><?= Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        'Выход (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                    )
                                    . Html::endForm() ?></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/site/office">Офис</a></li>
                            <li><a href="/site/salons">Регионы</a></li>
                            <li><a href="https://46.180.147.126:21443/">Рассылка</a></li>
                            <li><a href="http://cert.gromadacorp.ru/login/index.php">Облако</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Поиск"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->

</section><!--/slider-->

<?= $content ?>

<footer id="footer"><!--Footer-->


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Мебельвилль <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
