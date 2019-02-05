<?php
/**
 * Created by PhpStorm.
 * User: di
 * Date: 02.02.19
 * Time: 16:10
 */

namespace frontend\models;

use yii\db\BaseActiveRecord;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Links extends ActiveRecord
{
    public static  function tableName()
    {
        return '{{links}}';
    }


    public function rules()
    {
        return[
            [['link', 'theme', 'comment'], 'required'],
            [['created_at'], 'safe']
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
        ];
    }

}