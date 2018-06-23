<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Shop */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shops'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-view">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            'address:ntext',
            'tel',
            'email:email',

            'aboutus:ntext',
            'service_title:ntext',
            'work_title:ntext',
            'contact_title:ntext',
            [
                    'attribute'=>'created_at',
                    'value'=>function($data){
                        return date('d-m-y H:i',$data->created_at);
                    }
            ],
            [
                'attribute'=>'updated_at',
                'value'=>function($data){
                    return date('d-m-y H:i',$data->updated_at);
                }
            ],
        ],
    ]) ?>

</div>
