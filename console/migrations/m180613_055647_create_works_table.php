<?php

use yii\db\Migration;

/**
 * Handles the creation of table `works`.
 */
class m180613_055647_create_works_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('works', [
            'id' => $this->primaryKey(),
            'shop_id'=>$this->integer(),
            'name'=>$this->integer(),
            'detail'=>$this->text(),
            'photo'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('works');
    }
}
