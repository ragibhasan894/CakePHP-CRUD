<h1>All Topics</h1>

<table>
	<tr>
		<th>Title</th>
		<th>User ID</th>
		<th>Published</th>
		<th>Created</th>
		<th>Modified</th>
	</tr>
	<?php foreach($topics as $topic) : ?>
	<tr>
		<td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['user_id'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['visible'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['created'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['modified'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($topic); ?>