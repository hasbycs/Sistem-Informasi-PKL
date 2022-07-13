<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "laporanpkl".
 *
 * @property string $bp
 * @property string $judul
 */
class Laporanpkl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laporanpkl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bp', 'judul'], 'required'],
            [['bp'], 'string', 'max' => 10],
            [['judul'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bp' => 'Bp',
            'judul' => 'Judul',
        ];
    }
}
