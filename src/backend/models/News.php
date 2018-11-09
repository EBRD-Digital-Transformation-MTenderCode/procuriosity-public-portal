<?php

namespace backend\models;

use common\components\behaviors\Logger;
use common\components\Resize;
use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $slug
 * @property string $date
 * @property string $image
 * @property string $title_en
 * @property string $title_ro
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
class News extends \yii\db\ActiveRecord
{
    private $path = '@frontend/web/uploads/news/';
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function behaviors()
    {
        return [
            Logger::className()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['slug', 'date', 'title_en'], 'required'],
            [['date'], 'date', 'format' => "yyyy-MM-dd"],
            [['body_ro', 'body_en', 'body_ru'], 'string'],
            [['slug', 'title_en', 'title_ro', 'title_ru', 'meta_title_ro', 'meta_title_en', 'meta_title_ru', 'meta_description_ro', 'meta_description_en', 'meta_description_ru'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
            [['slug'], 'unique'],
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
            'date' => 'Date',
            'image' => 'Image',
            'title_en' => 'Title En',
            'title_ro' => 'Title Ro',
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

    public function upload()
    {
        if (!empty($this->imageFile)) {
            $this->deleteImageFile();
            $this->image = uniqid() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs(Yii::getAlias($this->path . $this->image));
            $resize = new Resize(Yii::getAlias($this->path . $this->image));
            $resize->resizeImage(289, 217, 'crop');
            $resize->saveImage(Yii::getAlias($this->path . 'ico/' . $this->image));
            return true;
        } else {
            return false;
        }
    }

    private function deleteImageFile()
    {
        if(!empty($this->image)) {
            @unlink(Yii::getAlias($this->path . $this->image));
            @unlink(Yii::getAlias($this->path . 'ico/' . $this->image));
        }
    }

    public function beforeDelete()
    {
        $this->deleteImageFile();
        return parent::beforeDelete();
    }
}
