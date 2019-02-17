<?php
    /**
     * Created by PhpStorm.
     * User: user
     * Date: 14.01.19
     * Time: 8:16
     */

    namespace frontend\controllers;

    use frontend\models\Knowledge;
    use yii\web\Controller;
    use frontend\models\Reminder;

    class AppController extends Controller
    {
        public $theme;
        public $subt_os;
        public $subt_web;
        public $subt_progr;
        public $subt_net;
        public $subt_bios;
        public $subt_eng;
        public $subt_arch;


        public static function Reminder()
        {
            $time = Reminder::getReminder();
            $current = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i');
            $current_str = strtotime($current);

            echo '<div id="block">';
            foreach ($time as $item) {
                $time_str = strtotime($item['date']);
                $time_strm = $time_str - 86400;
                $time_strp = $time_str + 86400;
                if ($current_str < $time_strp && $current_str > $time_strm) {
                    echo '<pre class="reminder-pre">';
                    print_r($item['theme']);
                    echo '</pre>';
                   // echo '<input type="button" id="button" class="rem-btn" value="X">';
                }
                //  $rev = date('d/m/Y g:i:A',$current_str);
                // echo $rev;
            }
            echo '</div>';
            echo '<input type="button" id="button" class="rem-btn" value="X">';
        }





        public function init()
        {
            $this->theme = Knowledge::getThemeList();
            $this->subt_os = Knowledge::getSubThemeListOS();
            $this->subt_web = Knowledge::getSubThemeListWeb();
            $this->subt_progr = Knowledge::getSubThemeListProgramming();
            $this->subt_net = Knowledge::getSubThemeListNet();
            $this->subt_bios = Knowledge::getSubThemeListBios();
            $this->subt_eng = Knowledge::getSubThemeListEnglish();
            $this->subt_arch = Knowledge::getSubThemeListArchitecture();
            self::Reminder();


        }



    }