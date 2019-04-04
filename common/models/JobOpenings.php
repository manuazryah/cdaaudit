<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "job_openings".
 *
 * @property int $id
 * @property string $job_title
 * @property string $job_description
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class JobOpenings extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'job_openings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['job_description'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['job_description', 'job_title'], 'required'],
            [['DOC', 'DOU'], 'safe'],
            [['job_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'job_title' => 'Job Title',
            'job_description' => 'Job Description',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
