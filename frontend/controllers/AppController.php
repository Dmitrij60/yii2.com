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

        public function Menu(){

            $this->theme = Knowledge::getThemeList();
            $this->subt_os = Knowledge::getSubThemeListOS();
            $this->subt_web = Knowledge::getSubThemeListWeb();
            $this->subt_progr = Knowledge::getSubThemeListProgramming();
            $this->subt_net = Knowledge::getSubThemeListNet();
            $this->subt_bios = Knowledge::getSubThemeListBios();
            $this->subt_eng = Knowledge::getSubThemeListEnglish();
            $this->subt_arch = Knowledge::getSubThemeListArchitecture();

        }



    }