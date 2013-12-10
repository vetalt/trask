<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
            <?php
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type' => 'tabs', //'stacked' => true,
                'items' => $this->menu,
            ));
            ?>
            <?php echo $content; ?>
<?php $this->endContent(); ?>