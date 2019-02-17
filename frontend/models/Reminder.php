<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 16.01.19
     * Time: 14:33
     */

    namespace frontend\models;


    use yii\base\Model;
    use Yii;

    class Reminder extends Model
    {
        public $theme;
        public $date;
        public $comment;


        public function formName()
        {
            return '';
        }

        public static function tableName()
        {
            return 'reminder';
        }

        public function attributeLabels()
        {
            return [
                'theme' => 'Тема',
                'date' => 'Дата',
                'comment' => 'Комментарий',
            ];
        }

        public function rules()
        {
            return [
                [['theme', 'date'], 'required'],
                [['theme'], 'string', 'min' => 2],


            ];
        }

        public function save()
        {
            $sql = "INSERT INTO reminder(theme, date, comment) VALUES ('{$this->theme}','{$this->date}', '{$this->comment}') ";
            return Yii::$app->db->createCommand($sql)->execute();

        }

        public function  getReminder(){
            $sql = "SELECT  theme, date FROM reminder";
            $result = Yii::$app->db->createCommand($sql)->queryAll();

            return $result;
        }

    }