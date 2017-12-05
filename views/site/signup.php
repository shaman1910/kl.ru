<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use yii\web\View;
use yii\web\JsExpression;
use yii\widgets\MaskedInput;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>
    <?= Html::errorSummary($model)?>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>



            <?= $form->field($profile, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($profile, 'surname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($profile, 'patronymic')->textInput(['maxlength' => true]) ?>

            <?= $form->field($profile, 'department_id')->dropDownList(ArrayHelper::map($departments, 'id', 'title'), ['class'=>'form-control']); ?>

            <?= $form->field($profile, 'chief')->dropDownList([
                1 => 'Руководитель',
                0 => 'Сотрудник'
            ], ['class'=>'form-control']); ?>

            <?= $form->field($profile, 'status')->dropDownList([
                1 => 'Активировано',
                0 => 'Деактивировано'
            ], ['class'=>'form-control']); ?>

            <?= $form->field($profile, 'position')->textInput(['maxlength' => true]) ?>

                     <?= $form->field($profile, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($profile, 'date_bith')->widget(MaskedInput::className(),['mask'=>'9999-99-99'])->textInput(['placeholder'=>'1900-00-00']); ?>






            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
</div>
