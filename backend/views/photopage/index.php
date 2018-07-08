<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PhotopageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'จัดการรูปภาพ');
$this->params['breadcrumbs'][] = $this->title;
$path = Yii::getAlias('@frontend') .'/img/bgslides';
?>
<div class="photopage-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'จัดการรูปภาพ'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
           [
                   'attribute' => 'photo',
                   'format' => 'html',
                   'value' => function($data){
                       return '<a href="#" target="_blank">'.$data->photo.'</a>';
                   }
           ],
           // 'photo_position',
            [
                    'attribute' => 'photo_position',
                 'value' => function($data){
                   return \backend\helpers\PhotoType::getTypeById($data->photo_position);
                 }
            ],
            'caption',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
