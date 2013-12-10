<?php
$this->breadcrumbs=array(
	'Tasks',
);

$this->menu=array(
array('label'=>'Create Tasks','url'=>array('create')),
array('label'=>'Manage Tasks','url'=>array('admin')),
);
?>

<h1>Tasks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
