<div class="incentives form">
<?php echo $this->Form->create('Incentive'); ?>
	<fieldset>
		<legend><?php echo __('Add Incentive'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('cost');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Incentives'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>