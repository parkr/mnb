<div class="albumCovers index">
	<h2><?php echo __('Album Covers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('artist'); ?></th>
			<th><?php echo $this->Paginator->sort('album'); ?></th>
			<th><?php echo $this->Paginator->sort('filepath'); ?></th>
			<th><?php echo $this->Paginator->sort('date_released'); ?></th>
			<th><?php echo $this->Paginator->sort('date_added'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($albumCovers as $albumCover): ?>
	<tr>
		<td><?php echo h($albumCover['AlbumCover']['artist']); ?>&nbsp;</td>
		<td><?php echo h($albumCover['AlbumCover']['album']); ?>&nbsp;</td>
		<td><?php echo h($albumCover['AlbumCover']['filepath']); ?>&nbsp;</td>
		<td><?php echo h($albumCover['AlbumCover']['date_released']); ?>&nbsp;</td>
		<td><?php echo h($albumCover['AlbumCover']['date_added']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $albumCover['AlbumCover']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $albumCover['AlbumCover']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $albumCover['AlbumCover']['id']), null, __('Are you sure you want to delete # %s?', $albumCover['AlbumCover']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Album Cover'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Track Listing'), array('controller' => 'track_listings', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Shows'), array('controller' => 'shows', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	</ul>
</div>
