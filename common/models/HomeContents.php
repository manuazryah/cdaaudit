<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_contents".
 *
 * @property int $id
 * @property string $top_title
 * @property string $phone
 * @property string $email
 * @property string $facebook_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property string $youtube_link
 * @property string $welcome_content
 * @property string $ceo_name
 * @property string $ceo_message
 * @property string $service_description
 * @property string $middle_title
 * @property string $middle_description
 * @property string $footer_about_content
 * @property string $footer_address
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomeContents extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'home_contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['welcome_content', 'ceo_message', 'service_description', 'middle_description', 'footer_about_content', 'footer_address'], 'string'],
            [['phone', 'top_title', 'email', 'ceo_name', 'middle_title', 'welcome_content', 'ceo_message', 'service_description', 'middle_description', 'footer_about_content', 'footer_address', 'mobile'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['top_title', 'email', 'ceo_name', 'middle_title'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 25],
            [['facebook_link', 'twitter_link', 'linkedin_link', 'youtube_link'], 'string', 'max' => 255],
            [['ceo_image'], 'file', 'extensions' => 'jpg, png,jpeg'],
            [['brochure'], 'file', 'extensions' => 'pdf'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'top_title' => 'Top Title',
            'phone' => 'Land Phone Number',
            'mobile' => 'Mobile Number',
            'email' => 'Email',
            'facebook_link' => 'Facebook Link',
            'twitter_link' => 'Twitter Link',
            'linkedin_link' => 'Linkedin Link',
            'youtube_link' => 'Instagram Link',
            'welcome_content' => 'Welcome Content',
            'ceo_name' => 'CEO Name',
            'ceo_message' => 'CEO Message',
            'service_description' => 'Service Description',
            'middle_title' => 'Middle Title',
            'middle_description' => 'Middle Description',
            'footer_about_content' => 'Footer About Content',
            'footer_address' => 'Footer Address',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
