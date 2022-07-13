<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property integer $id
 * @property string $nama_provinsi
 *
 * @property Tempatpkl[] $tempatpkls
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_provinsi'], 'required'],
            [['nama_provinsi'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_provinsi' => 'Nama Provinsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempatpkls()
    {
        return $this->hasMany(Tempatpkl::className(), ['p_provinsi' => 'id']);
    }
}
