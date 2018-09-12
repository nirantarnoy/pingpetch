<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "port_gallery".
 *
 * @property int $id
 * @property int $port_id
 * @property string $name
 * @property string $filename
 * @property int $isprimary
 * @property int $created_at
 * @property int $updated_at
 */
class PortGallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'port_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['port_id', 'isprimary', 'created_at', 'updated_at'], 'integer'],
            [['name', 'filename'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'port_id' => 'Port ID',
            'name' => 'Name',
            'filename' => 'Filename',
            'isprimary' => 'Isprimary',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
