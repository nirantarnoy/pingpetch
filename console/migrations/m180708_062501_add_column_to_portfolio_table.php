<?php

use yii\db\Migration;

/**
 * Class m180708_062501_add_column_to_portfolio_table
 */
class m180708_062501_add_column_to_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('portfolio','title',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropColumn('portfolio','title');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180708_062501_add_column_to_portfolio_table cannot be reverted.\n";

        return false;
    }
    */
}
