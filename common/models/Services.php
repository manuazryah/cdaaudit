<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $service_title
 * @property string $canonical_name
 * @property string $service_quote
 * @property string $small_description
 * @property string $detailed_description
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Services extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['service_title', 'canonical_name', 'service_quote', 'small_description', 'detailed_description'], 'string'],
            [['detailed_description_title', 'service_title', 'service_quote', 'small_description', 'detailed_description', 'meta_title', 'meta_keyword', 'meta_description'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['service_title'], 'unique'],
            [['service_title', 'canonical_name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 100],
            [['image'], 'required', 'on' => 'create'],
            [['image'], 'file', 'extensions' => 'jpg, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'service_title' => 'Service Title',
            'canonical_name' => 'Canonical Name',
            'service_quote' => 'Service Quote',
            'small_description' => 'Small Description',
            'detailed_description' => 'Detailed Description',
            'image' => 'Image',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
