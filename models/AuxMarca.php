<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aux_marca".
 *
 * @property int $id
 * @property string|null $marca
 */
class AuxMarca extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aux_marca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marca'], 'default', 'value' => null],
            [['marca'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca',
        ];
    }

}
