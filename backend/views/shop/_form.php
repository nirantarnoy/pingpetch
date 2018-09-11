<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Shop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aboutus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'service_title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'work_title')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'contact_title')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'slogan_top')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'slogan_bottom')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
