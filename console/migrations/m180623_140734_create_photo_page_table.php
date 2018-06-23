<?php

use yii\db\Migration;

/**
 * Handles the creation of table `photo_page`.
 */
class m180623_140734_create_photo_page_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('photo_page', [
            'id' => $this->primaryKey(),
            'photo'=> $this->string(),
            'photo_position'=>$this->integer(),
            'caption'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('photo_page');
    }
}
