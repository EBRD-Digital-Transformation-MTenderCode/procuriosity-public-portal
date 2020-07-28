<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-i18n
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

namespace common\modules\i18n\controllers;

use yii\base\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use Yii;
use common\modules\i18n\models\search\SourceMessageSearch;
use common\modules\i18n\models\SourceMessageAdmin;
use common\modules\i18n\Module;

/**
 * DefaultController for I18N module
 *
 * @author Aleksandr Zelenin <aleksandr@zelenin.me>
 * @since 1.0
 */
class DefaultController extends Controller
{
    /**
     * Renders list of messages
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SourceMessageSearch;
        $dataProvider = $searchModel->search(Yii::$app->getRequest()->get());
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    /**
     * Updates messages
     *
     * @param integer $id Message ID
     * @return string|Response
     */
    public function actionUpdate($id)
    {
        /** @var SourceMessage $model */
        $model = $this->findModel($id);
        $model->initMessages();
        if (Model::loadMultiple($model->messages, Yii::$app->getRequest()->post()) && Model::validateMultiple($model->messages)) {
            $model->saveMessages();
            foreach($model->messages as $language => $message) {
                $model->translation[$language] = $message->translation;
            }
            $model->update(false);
            Yii::$app->getSession()->setFlash('success', Module::t('Translation updated'));
            return $this->redirect(['index']);
        } else {
            return $this->render('update', ['model' => $model]);
        }
    }

    /**
     * @param $id
     * @return Response
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        foreach($model->messages as $language => $message) {
            $model->translation[$language] = $message->translation;
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * @param array|integer $id
     * @return SourceMessage|SourceMessage[]
     * @throws NotFoundHttpException
     */
    protected function findModel($id)
    {
        $query = SourceMessageAdmin::find()->where('id = :id', [':id' => $id]);
        $models = is_array($id)
            ? $query->all()
            : $query->one();
        if (!empty($models)) {
            return $models;
        }

        throw new NotFoundHttpException(Module::t('The requested page does not exist'));
    }
}
