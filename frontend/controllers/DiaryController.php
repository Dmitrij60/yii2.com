<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 14.01.19
     * Time: 8:16
     */

    namespace frontend\controllers;
    use frontend\models\Diary;
    use yii\web\Controller;
    use Yii;

    class DiaryController extends AppController
    {

        public function actionAdd(){


            $formData = Yii::$app->request->post();
            $model = new Diary();
            if (Yii::$app->request->isPost) {
                $model->title = $formData['title'];
                $model->theme = $formData['theme'];
                $model->subtheme = $formData['date'];
                $model->content = $formData['diary'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('info', 'Вы добавили новое знание в Вашу базу знаний');
                };
            }

            return $this->render('add', [
                'model' => $model,
            ]);
        }

    }