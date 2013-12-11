<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'tasks-form',
    'enableAjaxValidation' => false,
        ));
?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php
echo $form->errorSummary($model);

echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255));

echo $form->dropDownListRow($model, 'status_id', TaskStatuses::getStatuses());

echo $form->dropDownListRow($model, 'user_id', Users::getLogins());

$this->widget('bootstrap.widgets.TbCKEditor', array('model' => $model, 'attribute' => 'description'));
?>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => $model->isNewRecord ? 'Create' : 'Save',
    ));
    ?>
</div>

<?php $this->endWidget(); ?>
