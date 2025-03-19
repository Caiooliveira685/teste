<?php

use yii\db\cubrid\Schema;
use yii\db\Migration;

class m250306_134357_criar_tabela_viatura extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('viatura', [

            'id' => schema::TYPE_PK,
            'numero' => schema::TYPE_STRING,


        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('viatura');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250306_134357_criar_tabela_viatura cannot be reverted.\n";

        return false;
    }
    */
}



