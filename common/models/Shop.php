<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $tel
 * @property string $email
 * @property int $created_at
 * @property int $updated_at
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address','aboutus','service_title','work_title','contact_title','slogan_top','slogan_bottom'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'tel', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'ชื่อร้าน'),
            'aboutus' => Yii::t('app', 'เกี่ยวกับเรา'),
            'service_title' => Yii::t('app', 'บริการของเรา'),
            'work_title' => Yii::t('app', 'งานของเรา'),
            'contact_title' => Yii::t('app', 'ติดต่อเรา'),
            'address' => Yii::t('app', 'ที่อยู่'),
            'tel' => Yii::t('app', 'เบอร์ติดต่อ'),
            'slogan_top'=>'สโลแกน1',
            'slogan_bottom'=>'สโลแกน2',
            'email' => Yii::t('app', 'Email'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
