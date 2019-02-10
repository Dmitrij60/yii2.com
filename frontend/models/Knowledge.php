<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06.12.18
 * Time: 12:45**/
namespace frontend\models;

use Yii;
use yii\base\Model;



class Knowledge extends Model
{

    const ID_THEME_OS = 1;
    const ID_THEME_WEB = 13;
    const ID_THEME_PROGR = 12;
    const ID_THEME_NET = 2;
    const ID_THEME_BIOS = 3;
    const ID_THEME_ENG = 10;
    const ID_THEME_ARCH = 11;

    public $title;
    public $theme;
    public $subtheme;
    public $content;

    /*** Получить список знаний ***/
    public function getKnowledgeList()
    {
        $sql = 'SELECT knowledge.*, theme.*, subtheme.* FROM knowledge, theme, subtheme WHERE knowledge.id_theme =  theme.id_theme AND knowledge.id_subtheme = subtheme.id_subtheme';

        $result = Yii::$app->db->createCommand($sql)->queryAll();



       if(!empty($result) && is_array($result)) {

            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }

        }

        return $result;
    }

    /*** Получить одну запись  ***/
    public function getKnowledgeItem($id)
    {
        $id = intval($id);
        $sql = 'SELECT knowledge.*, theme.*, subtheme.* FROM knowledge, theme, subtheme WHERE knowledge.id_theme = theme.id_theme AND knowledge.id_subtheme = subtheme.id_subtheme AND id ='. $id;

        $result = Yii::$app->db->createCommand($sql)->queryOne();

        return $result;
    }


    /*** Получить список  ***/
    public function getThemeList()
    {
        $sql = 'SELECT theme FROM yii2.theme';

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }





    /*** Получить список  ***/
    public function getSubThemeListOS()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_OS;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }



    /*** Получить список ***/
    public function getSubThemeListProgramming()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_PROGR;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();

        return $result;
    }

    /*** Получить список ***/
    public function getSubThemeListWeb()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_WEB;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }

    /*** Получить список ***/
    public function getSubThemeListNet()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_NET;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }

    /*** Получить список ***/
    public function getSubThemeListBios()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_BIOS;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();

        return $result;
    }

    /*** Получить список ***/
    public function getSubThemeListEnglish()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_ENG;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }

    /*** Получить список ***/
    public function getSubThemeListArchitecture()
    {
        $sql = 'SELECT subtheme FROM theme, subtheme WHERE theme.id_theme = subtheme.id_theme AND theme.id_theme = ' . self::ID_THEME_ARCH;

        $result = Yii::$app->db->createCommand($sql)->queryColumn();


        return $result;
    }

    public function getSubThemeItem($id_subtheme)
    {
        $id = intval($id_subtheme);
        $sql = 'SELECT knowledge.*, theme.*, subtheme.* FROM knowledge, theme, subtheme WHERE knowledge.id_theme = theme.id_theme AND knowledge.id_subtheme = subtheme.id_subtheme AND subtheme.id_subtheme ='. $id_subtheme;

        $result = Yii::$app->db->createCommand($sql)->queryAll();


        if(!empty($result) && is_array($result)) {

            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }

        }

        return $result;


    }
















}