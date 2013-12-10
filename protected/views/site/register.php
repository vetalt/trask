<?php
$this->pageTitle = Yii::app()->name . ' - Register';
$this->breadcrumbs = array(
    'Register',
);
?>

<h1>Register</h1>

<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'register-form',
//        'enableClientValidation' => true,
//        'clientOptions' => array(
//            'validateOnSubmit' => true,
//        ),
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?php echo $form->labelEx($model, 'login'); ?>
<?php echo $form->textField($model, 'login'); ?>
<?php echo $form->error($model, 'login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'pass'); ?>
<?php echo $form->passwordField($model, 'pass'); ?>
<?php echo $form->error($model, 'pass'); ?>
    </div>


    <div class="row buttons">
<?php echo CHtml::submitButton('Register', array('class' => 'btn btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>
</div><!-- form -->