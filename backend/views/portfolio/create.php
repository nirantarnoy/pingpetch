<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Portfolio */

$this->title = 'สร้างผลงาน';
$this->params['breadcrumbs'][] = ['label' => 'Portfolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modelfile'=>$modelfile,
    ]) ?>

</div>
