<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tahunbp".
 *
 * @property string $angkatan
 */
class Tahunbp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tahunbp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['angkatan'], 'required'],
            [['angkatan'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'angkatan' => Yii::t('app', 'Angkatan'),
        ];
    }
}
