<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
$path = Yii::getAlias('@frontend') .'/web/img/screenshots';
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@frontend/web/img/screenshots');
?>

<div class="portfolio-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype'=>'multipart/form-data']]); ?>



    <?= $form->field($model, 'title')->textarea(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
    <hr />
    <?php if(!$model->isNewRecord): ?>
      <div class="panel panel-body">  <div class="row">
       <?php foreach ($model_gallery as $value):?>

               <div class="col-xs-6 col-md-3">
                   <a href="#" class="thumbnail">
                       <img src="../../frontend/web/img/screenshots/<?=$value->filename?>" alt="">
                   </a>
               </div>

           <?php //echo Html::img("../../frontend/web/img/screenshots/".$value->filename,['width'=>'10%','class'=>'thumbnail']) ?>
       <?php endforeach;?></div>
      </div>
    <?php endif;?>

    <?php echo "<h5>แนบไฟล์</h5>";?>
    <?php
    echo FileInput::widget([
        'model' => $modelfile,
        'name' =>'file[]',
        'attribute' => 'file[]',
        'id'=>'upfile',
        'options' => ['multiple' => true,'accept' => ['.TXT','.PDF','.PNG','.JPG','.GIF'],'style'=>'width: 300px'],
        'pluginOptions' => [
            'showUpload'=>false,
            'maxFileCount'=>5,
        ],
    ]);
    ?>
    <input type="hidden" name="old_photo" value="<?=$model->photo?>">
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
