<div class="container">

<h2>All Posts</h2>
<div class="jumbotron">
<table class="table">
	<tr>
		<th>ID</th>
		<th>Topic</th>
		
	</tr>
	<?php foreach($posts as $post) : ?>
	<tr>
		<td><?php echo $this->HTML->link($post['Post']['id'], array('controller'=>'post','action'=>'view',$post['Post']['id'])); ?></td>

		<td><?php echo $this->HTML->link($post['Topic']['title'], array('controller'=>'post','action'=>'view',$post['Post']['topic_id'])); ?></td>

		
	</tr>
	<?php endforeach; ?>
	<?php unset($topic); ?>
	</div>
</div>