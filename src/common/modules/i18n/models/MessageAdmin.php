<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-i18n
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

namespace common\modules\i18n\models;

use common\components\behaviors\Logger;
use Yii;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use common\modules\i18n\Module;

class MessageAdmin extends Message
{

    public function behaviors()
    {
        return [
            'Logger' => [
                'class' => Logger::className(),
            ]
        ];
    }
}
