<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "angkatan".
 *
 * @property integer $id
 * @property string $tahun
 */
class Angkatan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'angkatan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun'], 'required'],
            [['tahun'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tahun' => 'Tahun',
        ];
    }
}
