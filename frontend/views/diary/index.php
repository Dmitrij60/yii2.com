<?php
    /* @var $model frontend\models\CreateTheme */

    use yii\widgets\ActiveForm;
    use mihaildev\ckeditor\CKEditor;
    use yii\helpers\Html;
    /*
       if($model->hasErrors()){
            echo '<pre>';
            print_r($model->getErrors());
            echo '<pre>';
        }*/


    $themeItem = $this->context->theme;

?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'title') ?>
<?php echo $form->field($model, 'theme') ?>
<?php echo $form->field($model, 'subtheme') ?>
<?php echo $form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>
<?php echo Html::submitButton('Добавить', ['class' => 'btn btn-primary  '] ) ?>

<?php $form = ActiveForm::end(); ?>