<?php

use yii\db\Migration;

/**
 * Class m180911_124906_add_column_to_shop_table
 */
class m180911_124906_add_column_to_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->addColumn('shop','slogan_top',$this->string());
      $this->addColumn('shop','slogan_bottom',$this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop','slogan_top');
        $this->dropColumn('shop','slogan_bottom');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180911_124906_add_column_to_shop_table cannot be reverted.\n";

        return false;
    }
    */
}
