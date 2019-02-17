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


        public static function ReminderDay()
        {
            $time = Reminder::getReminder();
            $current = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i');
            $current_str = strtotime($current);
            echo '<div class="col-md-4 col-sm-6, block-rem" id="block">';
            echo "Денек";
            foreach ($time as $item) {
                $time_str = strtotime($item['date']);
                $time_strm = $time_str - 86400;
                $time_strp = $time_str + 86400;
                $date_str = strtotime($item['date']);


                if ($current_str < $time_strp && $current_str > $time_strm) {
                    $rev = date('d.m.Y H:i', $date_str);
                    echo '<pre class="reminder-pre">';
                    echo($item['theme'] . '         ' . $rev);
                    echo '</pre>';
                }
            }

            $date = Reminder::getReminderDate();
            foreach ($date as $itemDate) {
                $date_str = strtotime($itemDate['date']);
                $date_strm = $date_str - 86400;
                $date_strp = $date_str + 86400;
                if ($current_str < $date_strp && $current_str > $date_strm) {
                    echo '<input type="button" id="button" class="rem-btn" value="X">';
                    break;
                }
            }
            echo '</div>';
        }

        public static function ReminderWeek()
        {
            $time = Reminder::getReminder();
            $current = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i');
            $current_str = strtotime($current);
            echo '<div class="col-md-4 col-sm-6, block-rem" id="block2">';
            echo "Неделька";
            foreach ($time as $item) {
                $time_str = strtotime($item['date']);
                $time_strm = $time_str - 604800;
                $time_strp = $time_str + 604800;
                $time_strm2 = $time_str - 86400;
                $time_strp2 = $time_str + 86400;
                $date_str = strtotime($item['date']);
                if (($current_str < $time_strp && $current_str > $time_strm)
                    && !($current_str < $time_strp2 && $current_str > $time_strm2)) {
                    $rev = date('d.m.Y H:i', $date_str);
                    echo '<pre class="reminder-pre2">';
                    echo($item['theme'] . '         ' . $rev);
                    echo '</pre>';
                }
            }

            $date = Reminder::getReminderDate();
            foreach ($date as $itemDate) {
                $date_str = strtotime($itemDate['date']);
                $date_strm = $date_str - 604800;
                $date_strp = $date_str + 604800;
                if ($current_str < $date_strp && $current_str > $date_strm) {
                    echo '<input type="button" id="button2" class="rem-btn" value="X">';
                    break;
                }
            }
            echo '</div>';
        }


        public static function ReminderMonth()
        {
            $time = Reminder::getReminder();
            $current = (new \DateTime('now', new \DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i');
            $current_str = strtotime($current);
            echo '<div class="col-md-4 col-sm-6, block-rem" id="block3">';
            echo "Месяцок";
            foreach ($time as $item) {
                $time_str = strtotime($item['date']);
                $time_strm = $time_str - 2592000;
                $time_strp = $time_str + 2592000;
                $time_strm3 = $time_str - 604800;
                $time_strp3 = $time_str + 604800;
                $time_strm2 = $time_str - 86400;
                $time_strp2 = $time_str + 86400;
                $date_str = strtotime($item['date']);
                if (($current_str < $time_strp && $current_str > $time_strm)
                    && !($current_str < $time_strp2 && $current_str > $time_strm2)
                    && !($current_str < $time_strp3 && $current_str > $time_strm3)) {
                    $rev = date('d.m.Y H:i', $date_str);
                    echo '<pre class="reminder-pre3">';
                    echo($item['theme'] . '         ' . $rev);
                    echo '</pre>';
                }
            }

            $date = Reminder::getReminderDate();
            foreach ($date as $itemDate) {
                $date_str = strtotime($itemDate['date']);
                $time_strm = $time_str - 2592000;
                $time_strp = $time_str + 2592000;
                $time_strm3 = $time_str - 604800;
                $time_strp3 = $time_str + 604800;
                $time_strm2 = $time_str - 86400;
                $time_strp2 = $time_str + 86400;
                if (($current_str < $time_strp && $current_str > $time_strm)
                    && !($current_str < $time_strp2 && $current_str > $time_strm2)
                    && !($current_str < $time_strp3 && $current_str > $time_strm3)) {
                    echo '<input type="button" id="button3" class="rem-btn" value="X">';
                    break;
                }
            }
            echo '</div>';
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
            self::ReminderDay();
            self::ReminderWeek();
            self::ReminderMonth();


        }



    }