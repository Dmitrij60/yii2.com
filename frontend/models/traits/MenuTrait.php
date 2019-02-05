<?php
 namespace  frontend\models\traits;
 use frontend\models\Knowledge;

    trait MenuTrait
    {

    $this->theme = Knowledge::getThemeList();
    $this->subt_os = Knowledge::getSubThemeListOS();
    $this->subt_web = Knowledge::getSubThemeListWeb();
    $this->subt_progr = Knowledge::getSubThemeListProgramming();
    $this->subt_net = Knowledge::getSubThemeListNet();
    $this->subt_bios = Knowledge::getSubThemeListBios();
    $this->subt_eng = Knowledge::getSubThemeListEnglish();
    $this->subt_arch = Knowledge::getSubThemeListArchitecture();

    }