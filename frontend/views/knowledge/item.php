<p><h4><?php echo $item['theme']; ?> : <?php echo $item['subtheme']; ?></h4></p>
    <h1><?php echo $item['title']; ?></h1>
    <p><?php echo $item['content']; ?></p>
<a href="<?php echo  Yii::$app->urlManager->createUrl(['knowledge/index']); ?>" class="btn btn-info">Назад</a>


