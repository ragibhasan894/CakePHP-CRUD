<? //php
	
//	echo $post['Post']['body'];

//?>

<div class='container'>
	<table class="table">
		<tr>
			<th>Title</th>
			<th>Content</th>
		</tr>
		<tr>
			<td>
				<?php echo $post['Topic']['title']; ?>
			</td>
			<td>
				<?php echo $post['Post']['body']; ?>
			</td>
		</tr>


	</table>

</div>