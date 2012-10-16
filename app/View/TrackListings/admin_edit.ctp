<div class="trackListings form">
<?php echo $this->Form->create('TrackListing'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Track Listing'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrackListing.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TrackListing.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Show'), array('controller' => 'shows', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
