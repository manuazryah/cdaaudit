<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $image
 * @property string $author
 * @property string $date
 * @property string $title
 * @property string $canonical_name
 * @property string $small_description
 * @property string $detailed_description
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class News extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['date', 'DOC', 'DOU'], 'safe'],
            [['small_description', 'detailed_description'], 'string'],
            [['canonical_name', 'small_description', 'detailed_description', 'date', 'title', 'author', 'meta_title', 'meta_keyword', 'meta_description'], 'required'],
            [['status', 'CB', 'UB'], 'integer'],
            [['image', 'author'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'title' => 'Title',
            'canonical_name' => 'Canonical Name',
            'small_description' => 'Small Description',
            'detailed_description' => 'Detailed Description',
            'meta_title' => 'Meta Title',
            'meta_keyword' => 'Meta Keyword',
            'meta_description' => 'Meta Description',
            'status' => 'Status',
            'CB' => 'C B',
            'UB' => 'U B',
            'DOC' => 'D O C',
            'DOU' => 'D O U',
        ];
    }

}
