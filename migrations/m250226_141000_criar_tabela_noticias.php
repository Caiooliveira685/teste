<?php

use yii\db\Schema;
use yii\db\Migration;

class m250226_141000_criar_tabela_noticias extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('noticias', [
            'id' => Schema::TYPE_PK,
            'titulo' => Schema::TYPE_STRING . ' NOT NULL',
            'conteudo' => Schema::TYPE_TEXT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('noticias');
        // echo "m250226_141000_criar_tabela_noticias cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250226_141000_criar_tabela_noticias cannot be reverted.\n";

        return false;
    }
    */
}
