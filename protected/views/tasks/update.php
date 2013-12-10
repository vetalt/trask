<?php

$this->breadcrumbs = array(
    'Tasks' => array('admin'),
    $model->title => array('view', 'id' => $model->id),
    'Edit',
);

$this->menu = array(
    array('label'=>'Tasks','url'=>array('/tasks/admin')),
    array('label'=>'View','url'=>array('/tasks/view','id'=>$model->id)),
    array('label'=>'Edit','url'=>array('/tasks/update','id'=>$model->id)),
    array('label'=>'Delete','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>


<?php echo $this->renderPartial('_form', array('model' => $model)); ?>