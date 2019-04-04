<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "why_cda".
 *
 * @property int $id
 * @property string $main_heading
 * @property string $section1_content
 * @property string $section1_image
 * @property string $section2_title
 * @property string $section2_sub_title
 * @property string $section2_content
 * @property string $section2_image
 * @property string $why_choose_cda
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class WhyCda extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'why_cda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['section1_content', 'section2_content', 'why_choose_cda'], 'string'],
            [['main_heading', 'section1_content'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['main_heading', 'section1_image', 'section2_title', 'section2_sub_title', 'section2_image'], 'string', 'max' => 100],
            [['section1_image'], 'required', 'on' => 'create'],
            [['section1_image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'main_heading' => 'Heading',
            'section1_content' => 'Content',
            'section1_image' => 'Image',
            'section2_title' => 'Section2 Title',
            'section2_sub_title' => 'Section2 Sub Title',
            'section2_content' => 'Section2 Content',
            'section2_image' => 'Section2 Image',
            'why_choose_cda' => 'Why Choose Cda',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
