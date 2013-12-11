<?php

$this->breadcrumbs = array(
    'Tasks' => array('admin'),
    'Create',
);

//$this->menu = array(
//    array('label' => 'Tasks', 'url' => array('/tasks/admin')),
//    array('label' => 'Create', 'url' => array('/tasks/create')),
//);

echo $this->renderPartial('_form', array('model' => $model));
