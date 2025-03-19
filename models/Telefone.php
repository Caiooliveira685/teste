<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefone".
 *
 * @property int $id
 * @property float|null $numero
 */
class Telefone extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telefone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero'], 'default', 'value' => null],
            [['numero'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
        ];
    }

}
