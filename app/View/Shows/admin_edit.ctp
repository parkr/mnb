<div class="shows form">
<?php echo $this->Form->create('Show'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Show'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Show.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Show.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('controller' => 'track_listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('controller' => 'track_listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
