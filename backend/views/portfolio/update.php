<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */

$this->title = 'แก้ไขผลงาน: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="portfolio-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
