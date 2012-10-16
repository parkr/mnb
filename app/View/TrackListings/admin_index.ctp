<div class="trackListings index">
	<h2><?php echo __('Track Listings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('show_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('artist'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($trackListings as $trackListing): ?>
	<tr>
		<td><?php echo h($trackListing['TrackListing']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trackListing['Show']['name'], array('controller' => 'shows', 'action' => 'view', $trackListing['Show']['id'])); ?>
		</td>
		<td><?php echo h($trackListing['TrackListing']['title']); ?>&nbsp;</td>
		<td><?php echo h($trackListing['TrackListing']['artist']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trackListing['TrackListing']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trackListing['TrackListing']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trackListing['TrackListing']['id']), null, __('Are you sure you want to delete # %s?', $trackListing['TrackListing']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Show'), array('controller' => 'shows', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
