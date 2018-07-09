<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $contact_name
 * @property string $email
 * @property string $title
 * @property string $message
 * @property string $social
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['created'],'safe'],
            [['contact_name', 'email', 'title', 'social'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'contact_name' => Yii::t('app', 'ชื่อผู้ติดต่อ'),
            'email' => Yii::t('app', 'Email'),
            'title' => Yii::t('app', 'หัวข้อ'),
            'message' => Yii::t('app', 'ข้อความ'),
            'social' => Yii::t('app', 'Social'),
            'created_at' => Yii::t('app', 'วันที่'),
        ];
    }
}
