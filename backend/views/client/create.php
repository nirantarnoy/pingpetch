<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Client */

$this->title = Yii::t('app', 'สร้างรายการลูกค้า');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ลูกค้า'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
