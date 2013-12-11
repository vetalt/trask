<?php

$this->breadcrumbs = array(
    'Tasks'
);

//$this->menu = array(
//    array('label' => 'Tasks', 'url' => array('/tasks/admin'), 'icon' => 'list-alt'),
//    array('label' => 'Create', 'url' => array('/tasks/create'), 'icon' => 'plus'),
//);

$createButton = $this->widget('bootstrap.widgets.TbButton', array(
    'url' => array('/tasks/create'),
    'label' => 'Create',
    'type' => 'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size' => 'small', // null, 'large', 'small' or 'mini'
//    'icon' => 'plus'
        ), true);

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed hover',
    'id' => 'tasks-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'rowCssClassExpression' => '$data->status->row_css_class',
    'columns' => array(
        'id',
        array(
            'name' => 'title',
            'value' => 'CHtml::link($data->title, array("tasks/view&id=" . $data->id))',
            'type' => 'raw',
            'htmlOptions' => array('width' => '50%'),
        ),
        array(
            'header' => 'Status',
            'name' => 'statusId',
            'value' => '$data->status->title',
            'type' => 'raw',
            'filter' => TaskStatuses::getStatuses()
        ),
        array(
            'header' => 'User',
            'name' => 'userLogin',
            'value' => '$data->user->login',
            'type' => 'raw'
        ),
        array(
            'header' => $createButton,
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
