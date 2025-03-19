<?php

use yii\db\Migration;
use yii\db\Schema;

class m250226_152120_criar_tabela_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => schema::TYPE_PK,
            'nome' => schema::TYPE_STRING,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250226_152120_criar_tabela_usuario cannot be reverted.\n";

        return false;
    }
    */
}
