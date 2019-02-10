
<?php foreach ($list as $item): ?>


    <a href="<?php echo Yii::$app->urlManager->createUrl(['knowledge/item', 'id' => $item['id']]); ?>">
        <h1><?php echo $item['title']; ?></h1>
    </a>

    <p><h4><?php echo $item['theme']; ?> : <?php echo $item['subtheme']; ?></h4></p>


    <p><?php echo $item['content']; ?></p>

<?php endforeach; ?>
