<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m180708_043650_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),
            'photo'=> $this->string(),
            'photo_thump'=> $this->string(),
            'description' => $this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('portfolio');
    }
}
