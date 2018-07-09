<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Contact */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ข้อมูลติดต่อ'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-view">

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
          //  'id',
            'contact_name',
            'email:email',
            'title',
            'message:ntext',
            'social',
            [
                    'attribute'=>'created_at',
                    'value'=>function($data){
                        return date('d-m-Y',$data->created_at);
                    }
            ],
        ],
    ]) ?>

</div>
