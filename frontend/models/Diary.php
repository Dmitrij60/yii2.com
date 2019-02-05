<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 16.01.19
     * Time: 14:33
     */

    namespace frontend\models;


    use yii\base\Model;

    class Diary extends Model
    {
        public $theme;
        public $date;
        public $title;
        public $diary;

        public function formName()
        {
            return '';
        }

        public static function tableName()
        {
            return 'diary';
        }

        public function attributeLabels()
        {
            return [
                'theme' => 'Тема',
                'title' => 'Заголовок',
                'diary' => 'Напоминалка',
                'date' => 'Дата',
            ];
        }

        public function rules()
        {
            return [
                [['theme', 'subtheme', 'title', 'content'], 'required'],
                [['title', 'content'], 'string', 'min' => 2],


            ];
        }

        public function save()
        {
            $sql = "";
            return Yii::$app->db->createCommand($sql)->execute();

        }

    }