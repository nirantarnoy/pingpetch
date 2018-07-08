<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Service */

$this->title = 'สร้างหัวข้อบริการ';
$this->params['breadcrumbs'][] = ['label' => 'งานบริการ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
