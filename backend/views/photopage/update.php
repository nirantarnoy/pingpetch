<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Photopage */

$this->title = Yii::t('app', 'แก้ไขรูปภาพ: ' . $model->id, [
    'nameAttribute' => '' . $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'จัดการรูปภาพ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'แก้ไข');
?>
<div class="photopage-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
