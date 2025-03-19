<?php

use yii\db\schema;
use yii\db\Migration;

class m250227_142248_criar_tabela_escala extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('escala', [

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
        echo "m250227_142248_criar_tabela_escala cannot be reverted.\n";

        return false;
    }
    */
}
