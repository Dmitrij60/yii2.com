<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 18.12.18
     * Time: 15:32
     */

    namespace console\controllers;

    use yii\console\Controller;
    use Yii;

    class MailerController extends Controller
    {

        public function actionSend()
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

        public function actionTest()
        {
            echo 'Test';
            die;
        }

    }