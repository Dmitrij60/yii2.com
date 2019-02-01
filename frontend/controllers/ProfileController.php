<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 27.12.18
     * Time: 10:36
     */

    namespace frontend\controllers;

    use Yii;
    use yii\web\Controller;
    use frontend\models\Knowledge;
    use frontend\models\ProfileUpdate;
    use frontend\models\AddMailBox;


    class ProfileController extends AppController
    {

        public function actionIndex(){

            $this->Menu();

            $list = AddMailBox::getMailList();


            return $this->render('index', [
                'list' => $list,

            ]);
        }

        public function actionUpdate()
        {

            $this->Menu();

            $formData = Yii::$app->request->post();
            $model = new ProfileUpdate();
            if (Yii::$app->request->isPost) {
                $model->email = $formData['email'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('subscribeStatus', 'Вы подписали свою почту на рассылку');
                    Yii::$app->session->setFlash('info', 'Вы подписали свою почту на рассылку');
                };

           }

            return $this->render('update', [
                'model' => $model,
            ]);
        }


        /**
         * @return string
         * Add mailbox for profile
         */
        public function actionAdd()
        {
            $this->Menu();

            $formData = Yii::$app->request->post();
            $model = new AddMailBox();
            if (Yii::$app->request->isPost) {
                $model->email = $formData['email'];
                if ($model->validate() && $model->save()) {
                    Yii::$app->session->setFlash('info', 'Вы добавили почтовый новый почтовый ящик');
                };
            }

            return $this->render('addmail', [
                'model' => $model,
            ]);

        }


    }