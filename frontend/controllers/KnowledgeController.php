<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 06.12.18
     * Time: 12:52
     */

    namespace frontend\controllers;


    use frontend\models\Knowledge;
    use Yii;



    class KnowledgeController extends AppController
    {

        public function actionIndex(){

            $list = Knowledge::getKnowledgeList();

            $this->Menu();

          return $this->render('index', [
            'list' => $list,
              ]);
        }

        public function actionItem($id)
        {

            $item = Knowledge::getKnowledgeItem($id);
            $this->Menu();



            return $this->render('item', [
                'item' => $item, ]);
        }



















        public function actionMail()
        {
            $result = Yii::$app->mailer->compose()
                ->setFrom('dmitrijbuckov57@gmail.com')
                ->setTo('dmitrijbuckov57@gmail.com')
                ->setSubject('Тест')
                ->setTextBody('Тестовое письмо')
                ->setHtmlBody('<b>Тестовое письмо в формате HTML</b>')
                ->send();

            var_dump($result);
            die;
        }

    }