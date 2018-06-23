<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Shop */

$this->title = Yii::t('app', 'แก้ไขข้อมูลร้าน: ' . $model->name, [
    'nameAttribute' => '' . $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ร้านค้า'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไข');
?>
<div class="shop-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
