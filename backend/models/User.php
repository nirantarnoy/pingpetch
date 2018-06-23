<?php
namespace backend\models;
use Yii;
use yii\db\ActiveRecord;
date_default_timezone_set('Asia/Bangkok');

class User extends \common\models\User
{
   public function findName($id){
       $model = User::find()->where(['id'=>$id])->one();
       return count($model)>0?$model->username:'';
   }

}
