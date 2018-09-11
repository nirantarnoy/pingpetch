<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Photopage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photopage-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype'=>'multipart/form-data']]); ?>

    <input type="hidden" name="old_photo" value="<?=$model->photo?>">
    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>
    <a target="_blank" href="<?=Yii::getAlias('@frontend') .'/themes/alstar/dist/img/bgslides/'.$model->photo?>"><?=$model->photo?></a>

    <?= $form->field($model, 'photo_position')->widget(Select2::className(),[
            'data'=> ArrayHelper::map(\backend\helpers\PhotoType::asArrayObject(),'id','name'),
        'options'=>['placeholder'=>'เลือกตำแหน่ง'],
    ]) ?>

    <?= $form->field($model, 'caption')->textarea(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
