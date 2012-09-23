<div class="trackListings form">
<?php echo $this->Form->create('TrackListing'); ?>
	<fieldset>
		<legend><?php echo __('Add Track Listing'); ?></legend>
	<?php
		echo $this->Form->input('show_id');
		echo $this->Form->input('title');
		echo $this->Form->input('artist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Track Listings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Show'), array('controller' => 'shows', 'action' => 'add')); ?> </li>
	</ul>
</div>
