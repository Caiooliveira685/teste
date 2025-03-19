<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aux_calibre".
 *
 * @property int $id
 * @property string|null $calibre
 *
 * @property AuxRelCalibreModelo[] $auxRelCalibreModelos
 */
class AuxCalibre extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aux_calibre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calibre'], 'default', 'value' => null],
            [['calibre'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calibre' => 'Calibre',
        ];
    }

    /**
     * Gets query for [[AuxRelCalibreModelos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuxRelCalibreModelos()
    {
        return $this->hasMany(AuxRelCalibreModelo::class, ['idcalibre' => 'id']);
    }

}
