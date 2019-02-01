<?php
/**
 * Created by PhpStorm.
 * User: Bukov
 * Date: 16.01.2019
 * Time: 21:33
 */

namespace frontend\controllers;
use app\modules\timetrack\models\Timetable;


class CallendarController extends AppController
{

    public function actionJsoncalendar($start=NULL,$end=NULL,$_=NULL){
        $times = \app\modules\timetrack\models\Timetable::find()->where(array('category'=>\app\modules\timetrack\models\Timetable::CAT_TIMETRACK))->all();

        $events = array();

        foreach ($times AS $time){
            //Testing
            $Event = new \yii2fullcalendar\models\Event();
            $Event->id = $time->id;
            $Event->title = $time->categoryAsString;
            $Event->start = date('Y-m-d\Th:m:s\Z',strtotime($time->date_start.' '.$time->time_start));
            $Event->end = date('Y-m-d\Th:m:s\Z',strtotime($time->date_start.' '.$time->time_end));
            $events[] = $Event;
        }

        header('Content-type: application/json');
        echo Json::encode($events);

        Yii::$app->end();
    }




}



