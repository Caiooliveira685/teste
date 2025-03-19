<?php

use yii\db\Schema;
use yii\db\Migration;

class m250226_154212_criar_tabela_telefone extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('telefone', [
            'id' => schema::TYPE_PK,
            'numero' => Schema::TYPE_FLOAT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('telefone');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250226_154212_criar_tabela_telefone cannot be reverted.\n";

        return false;
    }
    */
}
