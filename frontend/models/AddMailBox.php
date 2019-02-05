<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 27.12.18
     * Time: 16:36
     */

    namespace frontend\models;

    use yii\base\Model;
    use Yii;


    class AddMailBox extends Model
    {
        public $email;


        public function getMailList()
        {
            $sql = 'SELECT email FROM mailbox';

            $result = Yii::$app->db->createCommand($sql)->queryAll();


            if (!empty($result) && is_array($result)) {
                return $result;
            }


        }





        public function rules()
        {
            return[
                [['email'], 'required'],
                [['email'], 'email'],

            ];
        }

        public function save()
        {
            $sql = " INSERT INTO mailbox (id, email) VALUES (null, '{$this->email}')";
            return Yii::$app->db->createCommand($sql)->execute();

        }

    }