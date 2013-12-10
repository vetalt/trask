<?php
$this->breadcrumbs=array(
	'Tasks'=>array('admin'),
	$model->title,
);

$this->menu=array(
array('label'=>'Tasks', 'icon' => 'list','url'=>array('/tasks/admin')),
array('label'=>'View', 'icon' => 'eye-open','url'=>array('/tasks/view','id'=>$model->id)),
array('label'=>'Edit', 'icon' => 'edit','url'=>array('/tasks/update','id'=>$model->id)),
array('label'=>'Delete', 'icon' => 'trash','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>


<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'title',
		'description',
		'status_id',
		'user_id',
),
)); ?>
