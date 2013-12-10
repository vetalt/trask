<?php

$this->breadcrumbs = array(
    'Tasks'
);

$this->menu = array(
    array('label' => 'Tasks', 'url' => array('/tasks/admin'), 'icon' => 'list-alt'),
    array('label' => 'Create', 'url' => array('/tasks/create'), 'icon' => 'plus'),
);
?>


<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'id' => 'tasks-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'title',
        array(
            'header' => 'Status',
            'name' => 'statusId',
            'value' => '$data->status->title',
            'type' => 'raw',
            'filter'=>TaskStatuses::getStatuses()
        ),
        array(
            'header' => 'User',
            'name' => 'userLogin',
            'value' => '$data->user->login',
            'type' => 'raw'
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
