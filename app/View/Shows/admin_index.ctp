<div class="shows index">
	<h2><?php echo __('Shows'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($shows as $show): ?>
	<tr>
		<td><?php echo h($show['Show']['id']); ?>&nbsp;</td>
		<td><?php echo h($show['Show']['name']); ?>&nbsp;</td>
        <td><?php echo h($show['Show']['text']); ?>&nbsp;</td>
		<td><?php echo h($show['Show']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $show['Show']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $show['Show']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $show['Show']['id']), null, __('Are you sure you want to delete # %s?', $show['Show']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Show'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Track Listings'), array('controller' => 'track_listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track Listing'), array('controller' => 'track_listings', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Album Covers'), array('controller' => 'album_covers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
</div>
