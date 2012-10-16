<div class="trackListings view">
<h2><?php  echo __('Track Listing'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trackListing['TrackListing']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trackListing['Show']['name'], array('controller' => 'shows', 'action' => 'view', $trackListing['Show']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($trackListing['TrackListing']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Artist'); ?></dt>
		<dd>
			<?php echo h($trackListing['TrackListing']['artist']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Track Listing'), array('action' => 'edit', $trackListing['TrackListing']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Track Listing'), array('action' => 'delete', $trackListing['TrackListing']['id']), null, __('Are you sure you want to delete # %s?', $trackListing['TrackListing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Show'), array('controller' => 'shows', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
