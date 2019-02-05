<?php

use yii\helpers\Html;
use yii\grid\GridView;
use \yii\helpers\Url;
use Yii;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Links';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить ссылку', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'theme',
            'comment:ntext',


            [
                'label' => 'Ссылка',
                'format' => 'raw',
                'value' => function($data){
                    $colName = Yii::$app->stringHelper->getShortLink($data->link);
                    $res = $data->link;
                    $url = "http://". $res;
                    return Html::a($colName, $url,
                        [
                            'title' =>  $data->link,
                            'target' => '_blank'
                        ]
                    );
                }
            ],


            [
                'attribute'=>'created_at',
                'label'=>'Создано',
                'format'=>'datetime', // Доступные модификаторы - date:datetime:time
                'headerOptions' => ['width' => '200'],
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
