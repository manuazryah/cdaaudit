<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property int $id
 * @property string $resume
 * @property string $date
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Resume extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'resume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['date', 'DOC', 'DOU'], 'safe'],
            [['status', 'CB', 'UB'], 'integer'],
            [['resume'], 'string', 'max' => 100],
            [['resume'], 'required'],
            [['resume'], 'file', 'extensions' => 'docx, doc,pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'resume' => 'Resume',
            'date' => 'Date',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
