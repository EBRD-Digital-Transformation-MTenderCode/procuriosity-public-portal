<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-i18n
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

namespace common\modules\i18n\models;

use common\components\behaviors\Logger;
use Yii;
use yii\caching\Cache;
use yii\db\ActiveRecord;
use yii\base\InvalidConfigException;
use yii\di\Instance;
use yii\i18n\DbMessageSource;
use common\modules\i18n\Module;
use common\modules\i18n\models\query\SourceMessageQuery;

class SourceMessageAdmin extends SourceMessage
{
    public $translation;

    public function rules()
    {
        return array_merge(
            parent::rules(),
            [
                ['translation', 'string']
            ]
        );
    }

    public function behaviors()
    {
        return [
            'Logger' => [
                'class' => Logger::className(),
            ]
        ];
    }

    public function attributes()
    {
        return array_merge(
            parent::attributes(),
            ['translation']
        );
    }
}
