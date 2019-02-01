<?php
    /* @var $model frontend\models\ProfileUpdate */


    if(Yii::$app->session->hasFlash('subscribeStatus')){
        echo Yii::$app->session->getFlash('subscribeStatus');
    }
    if ($model->hasErrors()) {
        echo '<pre>';
        print_r($model->getErrors());
        echo '<pre>';
    }

?>
<form method="post">
    <p>E-mail:</p>
    <input type="text" name="email"/>
    <br><br>
    <input type="submit" value="submit"/>

</form>





