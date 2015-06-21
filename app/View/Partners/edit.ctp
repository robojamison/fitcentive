<div class="partners form">
<?php echo $this->Form->create('Partner'); ?>
	<fieldset>
		<legend><?php echo __('Edit Partner'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partner.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Partner.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Deals'), array('controller' => 'incentives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Incentive'), array('controller' => 'incentives', 'action' => 'add')); ?> </li>
	</ul>
</div>
