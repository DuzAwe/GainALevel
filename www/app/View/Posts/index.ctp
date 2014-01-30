<h1>Blog Posts</h1>
<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Created</th>
		<th>Modified</th>
	</tr>

	<?php foreach ($posts as $post): ?>

	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php 
				echo $this->Html->link(
					$post['Post']['title'], 
					array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
				); 
			?>
		</td>
		<td>
			<?php 
				echo $this->Html->link(
					'Edit', array('action' => 'edit', $post['Post']['id'])
				); 
			?>
			</br>
			<?php 
				echo $this->Form->postLink(
					'Delete', 
					array('action' => 'delete', $post['Post']['id']),
					array('confirm' =>'Are you sure?')
				);
			?>
		</td>
		<td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $post['Post']['modified']; ?></td>
	</tr>

	<?php endforeach;?>

</table>