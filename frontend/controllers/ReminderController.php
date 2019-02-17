<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 14.01.19
     * Time: 8:16
     */

    namespace frontend\controllers;
    use frontend\models\Reminder;
    use yii\web\Controller;
    use Yii;

    class ReminderController extends AppController
    {

        public function actionAdd(){


            $formData = Yii::$app->request->post();
            $model = new Reminder();
            if (Yii::$app->request->isPost) {

                $model->theme = $formData['theme'];
                $model->date = $formData['date'];
                $model->date = Yii::$app->formatter->asDatetime($formData['date'], "php:Y.m.d. H:i:s");
                $model->comment = $formData['comment'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('info', 'Вы добавили новое напоминание');
                };
            }

            return $this->render('add', [
                'model' => $model,
            ]);
        }

    }