<?php use yii\helpers\Html; ?>
<div class="container">
    <div class="alert alert-danger">
        <?= nl2br(Html::encode('Обратите внимание, действуют следующие ограничения:
- не более 20 мегабайт и 30 адресатов в одном письме,
- максимум 300 мегабайт и 500 писем в одном почтовом ящике')) ?>
    </div>
</div>