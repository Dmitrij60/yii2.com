<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 28.12.18
     * Time: 12:45
     */

    namespace frontend\controllers;

    use Yii;

    use frontend\models\CreateTheme;

    class ThemeController extends AppController
    {


        public function actionCreate()
        {
            $this->Menu();

            $formData = Yii::$app->request->post();
            $model = new CreateTheme();
            if (Yii::$app->request->isPost) {
                $model->title = $formData['title'];
                $model->theme = $formData['theme'];
                $model->subtheme = $formData['subtheme'];
                $model->content = $formData['content'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('info', 'Вы добавили новое знание в Вашу базу знаний');
                };
            }

            return $this->render('create', [
                'model' => $model,
            ]);
        }

    }