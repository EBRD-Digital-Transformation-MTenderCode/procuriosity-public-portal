<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $slug
 * @property string $title_ro
 * @property string $title_en
 * @property string $title_ru
 * @property string $body_ro
 * @property string $body_en
 * @property string $body_ru
 * @property string $meta_title_ro
 * @property string $meta_title_en
 * @property string $meta_title_ru
 * @property string $meta_description_ro
 * @property string $meta_description_en
 * @property string $meta_description_ru
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'title_en'], 'required'],
            [['body_ro', 'body_en', 'body_ru'], 'string'],
            [['content_ro', 'content_en', 'content_ru'], 'string'],
            [['slug', 'title_ro', 'title_en', 'title_ru', 'meta_title_ro', 'meta_title_en', 'meta_title_ru', 'meta_description_ro', 'meta_description_en', 'meta_description_ru'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['menu'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'title_ro' => 'Title Ro',
            'title_en' => 'Title En',
            'title_ru' => 'Title Ru',
            'body_ro' => 'Body Ro',
            'body_en' => 'Body En',
            'body_ru' => 'Body Ru',
            'meta_title_ro' => 'Meta Title Ro',
            'meta_title_en' => 'Meta Title En',
            'meta_title_ru' => 'Meta Title Ru',
            'meta_description_ro' => 'Meta Description Ro',
            'meta_description_en' => 'Meta Description En',
            'meta_description_ru' => 'Meta Description Ru',
        ];
    }
}
