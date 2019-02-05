<?php
    /* @var $model frontend\models\CreateTheme */

    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\helpers\Html;
    use kartik\depdrop\DepDrop;
    use yii\helpers\Url;

/*
   if($model->hasErrors()){
        echo '<pre>';
        print_r($model->getErrors());
        echo '<pre>';
    }*/


   $themeItem = $this->context->theme;

?>

<h1>Создание темы.</h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'title') ?>
<?php
$catList = [
1 => 'Electronics',
2 => 'Books',
3 => 'Home & Kitchen'
];

// Parent
echo $form->field($model, 'theme')->dropDownList($catList, ['id'=>'cat-id']);

// Child # 1
echo $form->field($model, 'subtheme')->widget(DepDrop::classname(), [
'options'=>['id'=>'subcat-id'],
'pluginOptions'=>[
'depends'=>['cat-id'],
'placeholder'=>'Select...',
'url'=>Url::to(['/site/subcat'])
]
]);?>


<?php /*echo $form->field($model, 'theme') */?><!--
--><?php /*echo $form->field($model, 'subtheme') */?>



<?php echo $form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>
<?php echo Html::submitButton('Добавить', ['class' => 'btn btn-primary  '] ) ?>

<?php $form = ActiveForm::end(); ?>


<!--<form method="post">
    <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Заголовок:</label><br>
        <input type="text" class="headerform form-control" name="title"/>
        <br>
    </div>
    <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Тема:</label><br>
        <input type="text" class="themeform form-control" list="cityname" autocomplete="off" name="theme" onChange="Selected(this)"/>
        <datalist id="cityname">
            <option style='display: hidden;' id="Label1" value="1"><?php//*/ echo  $themeItem[0]; */?></option>
            <option id="Label2" value="<?php//*/ echo  $themeItem[1]; */?>">
            <option value="<?php//*/ echo  $themeItem[2]; */?>">
            <option value="<?php//*/ echo  $themeItem[3]; */?>">
            <option value="<?php /*//echo  $themeItem[4]; */?>">
            <option value="<?php//*/ echo  $themeItem[5]; */?>">
            <option value="<?php//*/ echo  $themeItem[6]; */?>">
        </datalist>
        <br>
    </div>
    <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Подтема:</label><br>
        <input type="text" class="subthemeform form-control" autocomplete="off" list="subtheme" name=""/>
        <datalist style='display: none;' id="subtheme">
            <option style='display: none;' id="Label3" >Boston</option>
            <option style='display: none;' id="Label4" value="Cambridge">
        </datalist>
        <br>
    </div>
    <div class="form-group purple-border">
        <label for="exampleFormControlTextarea4">Контент:</label><br>
        <textarea class="form-control contentform" id="exampleFormControlTextarea4" rows="8" cols="300"></textarea>
    </div>
    <input type="submit" value="Добавить"/>



</form>-->







