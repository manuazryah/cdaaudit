<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $about_content
 * @property string $who_we_are
 * @property string $what_we_are
 * @property string $our_approach
 * @property string $why_choose_cda
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class About extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['about_content', 'who_we_are', 'what_we_are', 'our_approach', 'why_choose_cda'], 'string'],
            [['about_content', 'who_we_are', 'what_we_are', 'our_approach', 'why_choose_cda', 'social_responsibility', 'vision_mission'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'about_content' => 'About Content',
            'who_we_are' => 'Who We Are',
            'what_we_are' => 'What We Are',
            'our_approach' => 'Our Approach',
            'vision_mission' => 'Vision & Mission',
            'why_choose_cda' => 'Why Choose Cda',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
