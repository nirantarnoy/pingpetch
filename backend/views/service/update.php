<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Service */

$this->title = 'แก้ไขหัวข้อบริการ: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'งานบริการ', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="service-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
