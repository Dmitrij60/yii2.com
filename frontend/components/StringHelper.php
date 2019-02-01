<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 11.12.18
     * Time: 12:38
     */
    namespace frontend\components;

    use Yii;

    class StringHelper
    {
        private $limit;

        public function __construct()
        {
            $this->limit = Yii::$app->params['shortTextLimit'];
        }

        public function getShort($string,$limit = null )
        {
            if($limit === null){
                $limit = $this->limit;
            }

            return mb_substr($string, 0, $limit, 'UTF-8').'...';
        }

    }