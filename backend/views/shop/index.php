<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ShopSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'ข้อมูลร้าน');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-index">
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if(count($dataProvider->getModels())==0):?>
    <p>
        <?= Html::a(Yii::t('app', 'สร้างชื่อร้าน'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php endif;?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
           // 'address:ntext',
            'tel',
            'email:email',
            //'created_at',
            //'updated_at',
            //'aboutus:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
