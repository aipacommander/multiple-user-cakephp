<div class="adminUsers form">
<?php echo $this->Form->create('AdminUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Admin User'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Admin Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
