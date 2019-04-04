<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "affiliation".
 *
 * @property int $id
 * @property string $title
 * @property string $logo
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Affiliation extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'affiliation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['logo'], 'required', 'on' => 'create'],
            [['logo'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'logo' => 'Logo',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
