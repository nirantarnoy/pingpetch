<?php

use yii\db\Migration;

/**
 * Handles the creation of table `port_gallery`.
 */
class m180912_025435_create_port_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('port_gallery', [
            'id' => $this->primaryKey(),
            'port_id'=>$this->integer(),
            'name'=>$this->string(),
            'filename'=>$this->string(),
            'isprimary'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('port_gallery');
    }
}
