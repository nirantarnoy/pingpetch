<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>
    <input type="hidden" name="old_photo" value="<?=$model->photo?>">
    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
