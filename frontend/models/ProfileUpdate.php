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


    class ProfileUpdate extends Model
    {
        public $email;

        public function rules()
        {
            return[
              [['email'], 'required'],
              [['email'], 'email'],
            ];
        }

        public function save()
        {
            $sql = " INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')";
            return Yii::$app->db->createCommand($sql)->execute();
            
        }

    }