<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 28.12.18
     * Time: 12:40
     */

    namespace frontend\models;


    use yii\base\Model;
    use yii\db\ActiveRecord;
    use yii\helpers\ArrayHelper;
    use Yii;


    class CreateTheme extends Model
    {

        public $theme;
        public $subtheme;
        public $title;
        public $content;

        public function formName()
        {
            return '';
        }

        public static function tableName()
        {
            return 'knowledge';
        }

        public function attributeLabels()
        {
            return [
                'theme' => 'Тема',
                'subtheme' => 'Подтема',
                'title' => 'Заголовок',
                'content' => 'Контент',
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
            $sql = " INSERT INTO knowledge (id_theme, id_subtheme, title, content) VALUES ('{$this->theme}', '{$this->subtheme}', '{$this->title}', '{$this->content}')";
            return Yii::$app->db->createCommand($sql)->execute();

        }

    }