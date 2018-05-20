<html>
<div class="container">

<h2>All Topics</h2>
<div class="jumbotron">
<table id="myTable" class="table table-striped table-bordered">
	<thead>
	<tr>
		<th>Title</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	</thead>
	<?php foreach($topics as $topic) : ?>
	<tbody>
	<tr>
		<td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['created'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><?php echo $this->HTML->link($topic['Topic']['modified'], array('controller'=>'topics','action'=>'view',$topic['Topic']['id'])); ?></td>

		<td><button type="button" class="btn btn-warning"><?php echo $this->HTML->link('Edit', array('controller'=>'topics','action'=>'edit',$topic['Topic']['id'])); ?></button></td>

		<td><button type="button" class="btn btn-danger"><?php echo $this->Form->postLink('Delete', array('controller'=>'topics','action'=>'delete',$topic['Topic']['id']), array('confirm'=>'Are you sure you want to delete this topic?')); ?></button></td>
	</tr>
	</tbody>	

	<?php endforeach; ?>
	<?php unset($topic); ?>
	</table>
	</div>
</div>
</html>

<script>
	$(document).ready(function() {
		$("#myTable").DataTable();
	});
</script>