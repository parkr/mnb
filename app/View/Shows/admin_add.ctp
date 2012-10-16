<div class="shows form">
<?php echo $this->Form->create('Show'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Show'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Shows'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('controller' => 'track_listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('controller' => 'track_listings', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
