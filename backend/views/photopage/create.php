<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Photopage */

$this->title = Yii::t('app', 'จัดการรูปภาพ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'รปภาพ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photopage-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
