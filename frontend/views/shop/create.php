<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Shop */

$this->title = Yii::t('app', 'สร้างข้อมูลร้าน');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ร้าน'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
