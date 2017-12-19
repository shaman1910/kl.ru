<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->dropDownList($departments, ['class'=>'form-control']); ?>

    <?= $form->field($model, 'chief')->dropDownList([
        1 => 'Руководитель',
        0 => 'Сотрудник'
    ], ['class'=>'form-control']); ?>

    <?= $form->field($model, 'status')->dropDownList([
        1 => 'Активировано',
        0 => 'Деактивировано'
    ], ['class'=>'form-control']); ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'date_bith')->widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'yearRange' => '1930:2017',
            'changeMonth' => 'true',
            'changeYear' => 'true',
            'autoSize'=>true,

        ]
    ])->widget(MaskedInput::className(),['mask'=>'9999-99-99'])->textInput(['placeholder'=>'1900-00-00']); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
