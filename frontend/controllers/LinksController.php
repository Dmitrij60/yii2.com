<?php
/**
 * Created by PhpStorm.
 * User: Bukov
 * Date: 07.01.2019
 * Time: 13:48
 */

namespace frontend\controllers;



use Yii;

class LinksController extends AppController
{

    public function actionIndex()
    {
        $this->Menu();

        return $this->render('index', [
            'list' => $list, ]);
    }