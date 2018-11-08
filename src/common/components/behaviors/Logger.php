<?php
namespace common\components\behaviors;

use Yii;
use backend\models\ActionsLogger;
use yii\db\ActiveRecord;
use yii\base\Behavior;

class Logger extends Behavior
{

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_UPDATE => 'afterUpdate',
            ActiveRecord::EVENT_AFTER_INSERT => 'afterInsert',
            ActiveRecord::EVENT_AFTER_DELETE => 'afterDelete',
        ];
    }

    public function afterInsert($event)
    {
        $method = 'insert';
        $this->saveLogger($method, $event);
    }

    public function afterUpdate($event)
    {
        $method = 'update';
        $this->saveLogger($method, $event);
    }

    public function afterDelete($event)
    {
        $method = 'delete';
        $this->saveLogger($method, $event);
    }

    private function saveLogger($method, $event)
    {
        $model = new ActionsLogger();
        $model->ip = Yii::$app->request->userIP;
        $model->user_id = Yii::$app->user->id;
        $model->username = Yii::$app->user->identity->username;
        $model->type = $event->sender->tableName();
        $model->type_id = $event->sender->id;
        $model->method = $method;
        $model->data = json_encode($event->sender->getAttributes());
        $model->created_at = time();
        $model->save();
    }
}