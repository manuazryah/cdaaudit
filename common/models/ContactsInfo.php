<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts_info".
 *
 * @property int $id
 * @property string $contact_message
 * @property string $address
 * @property string $post_box
 * @property string $phone
 * @property string $email
 * @property string $web
 * @property string $map
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ContactsInfo extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'contacts_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['contact_message', 'address', 'map'], 'string'],
            [['contact_message', 'address', 'map', 'phone', 'email', 'web', 'mobile'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['post_box'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 25],
            [['email', 'web'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'contact_message' => 'Contact Message',
            'address' => 'Address',
            'post_box' => 'Post Box',
            'phone' => 'Land Phone Number',
            'mobile' => 'Mobile Number',
            'email' => 'Email',
            'web' => 'Web',
            'map' => 'Map',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
