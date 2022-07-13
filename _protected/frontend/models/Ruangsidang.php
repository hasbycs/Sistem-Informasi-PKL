<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ruangsidang".
 *
 * @property integer $id
 * @property string $noLokal
 * @property string $gedung
 */
class Ruangsidang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ruangsidang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noLokal', 'gedung'], 'required'],
            [['noLokal'], 'string', 'max' => 10],
            [['gedung'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'noLokal' => Yii::t('app', 'No Lokal'),
            'gedung' => Yii::t('app', 'Gedung'),
        ];
    }
}
