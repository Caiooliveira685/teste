<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viatura".
 *
 * @property int $id
 * @property string|null $numero
 */
class Viatura extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero'], 'default', 'value' => null],
            [['numero'], 'string', 'max' => 255],
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
