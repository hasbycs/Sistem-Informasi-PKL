<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "angkatan".
 *
 * @property integer $id
 * @property string $tahun
 * @property string $kaprodi
 *
 * @property Dosen $kaprodi0
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
            [['tahun', 'kaprodi'], 'required'],
            [['tahun'], 'string', 'max' => 10],
            [['kaprodi'], 'string', 'max' => 30],
            [['kaprodi'], 'exist', 'skipOnError' => true, 'targetClass' => Dosen::className(), 'targetAttribute' => ['kaprodi' => 'dsn_nip']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tahun' => Yii::t('app', 'Tahun'),
            'kaprodi' => Yii::t('app', 'Kaprodi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKaprodi0()
    {
        return $this->hasOne(Dosen::className(), ['dsn_nip' => 'kaprodi']);
    }
}
