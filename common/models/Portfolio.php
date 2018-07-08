<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $photo
 * @property string $photo_thump
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'],'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['photo', 'photo_thump', 'description','title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'รูปภาพ',
            'title' => 'หัวข้อ',
            'photo_thump' => 'thumpnail',
            'description' => 'รายละเอียด',
            'created_at' => 'สร้างเมื่อ',
            'updated_at' => 'แก้ไขเมื่อ',
        ];
    }
}
