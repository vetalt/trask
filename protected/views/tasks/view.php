<?php

$this->breadcrumbs = array(
    'Tasks' => array('admin'),
    $model->title,
);

//$this->menu = array(
//    array('label' => 'Edit', 'icon' => 'edit', 'url' => array('/tasks/update', 'id' => $model->id)),
//    array('label' => 'Delete', 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
//);


$this->widget('bootstrap.widgets.TbDetailView', array(
    'type' => 'striped bordered condensed',
    'data' => $model,
    'attributes' => array(
        'id',
        'status.title',
        'user.login',
    ),
));


$this->widget('bootstrap.widgets.TbBox', array(
    'title' => $model->title,
    'headerIcon' => 'icon-list-alt',
    'content' => $model->description,
    'headerButtons' => array(
        array(
            'class' => 'bootstrap.widgets.TbButton',
            'type' => 'info',
            'label' => 'Edit',
            'icon' => 'edit',
            'url' => array('/tasks/update', 'id' => $model->id)
        ),
        array(
            'class' => 'bootstrap.widgets.TbButton',
            'type' => '',
            'label' => 'Delete',
            'icon' => 'trash',
            'url' => '#',
            'htmlOptions' => array(
                'submit' => array('delete', 'id' => $model->id),
                'confirm' => 'Are you sure you want to delete this item?'
            )
        )
    )
));
