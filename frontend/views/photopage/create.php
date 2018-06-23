<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Photopage */

$this->title = Yii::t('app', 'Create Photopage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Photopages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photopage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
