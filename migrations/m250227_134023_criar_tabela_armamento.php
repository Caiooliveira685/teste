<?php

use yii\db\Schema;
use yii\db\Migration;

class m250227_134023_criar_tabela_armamento extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('armamento', [

            'id' => schema::TYPE_PK,
            'nome' => schema::TYPE_STRING,

    
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('armamento');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250227_134023_criar_tabela_armamento cannot be reverted.\n";

        return false;
    }
    */
}
