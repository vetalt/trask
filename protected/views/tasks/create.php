<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'Tasks','url'=>array('/tasks/admin')),
array('label'=>'Create','url'=>array('/tasks/create')),
);
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>