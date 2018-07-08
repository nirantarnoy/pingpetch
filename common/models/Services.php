<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int $shop_id
 * @property int $name
 * @property string $detail
 * @property string $photo
 * @property int $created_at
 * @property int $updated_at
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shop_id', 'name', 'created_at', 'updated_at'], 'integer'],
            [['detail','title'], 'string'],
            [['photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'shop_id' => Yii::t('app', 'Shop ID'),
            'name' => Yii::t('app', 'หัวข้อ'),
            'title' => Yii::t('app', 'หัวข้อ'),
            'detail' => Yii::t('app', 'รายละเอียด'),
            'photo' => Yii::t('app', 'รูปภาพ'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
