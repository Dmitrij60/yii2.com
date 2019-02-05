<?php
    /* @var $model frontend\models\CreateTheme */

    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\helpers\Html;
    use kartik\datetime\DateTimePicker;

    /*
       if($model->hasErrors()){
            echo '<pre>';
            print_r($model->getErrors());
            echo '<pre>';
        }*/


    $themeItem = $this->context->theme;

?>

    <h1>Создание напоминалки.</h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'title') ?>
<?php echo $form->field($model, 'theme') ?>

<?php echo $form->field($model, 'date')->widget(DateTimePicker::classname(), [
    'name' => 'date',
    'value' => '18-06-1018, 14:45',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'dd-M-yyyy hh:ii'
    ]
]);
?>


<?php echo $form->field($model, 'diary')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>


<?php echo Html::submitButton('Добавить', ['class' => 'btn btn-primary  '] ) ?>

<?php $form = ActiveForm::end(); ?>


