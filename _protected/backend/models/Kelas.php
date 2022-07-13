<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property string $kls
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kls'], 'required'],
            [['kls'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kls' => Yii::t('app', 'Nama Kelas'),
        ];
    }
}
