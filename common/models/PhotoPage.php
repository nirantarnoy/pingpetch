<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "photo_page".
 *
 * @property int $id
 * @property string $photo
 * @property int $photo_position
 * @property string $caption
 * @property int $created_at
 * @property int $updated_at
 */
class PhotoPage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['photo'],'required'],
            [['photo_position', 'created_at', 'updated_at'], 'integer'],
            [['photo', 'caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'photo' => Yii::t('app', 'รูปภาพ'),
            'photo_position' => Yii::t('app', 'ตำแหน่งแสดง'),
            'caption' => Yii::t('app', 'ข้อความ'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
