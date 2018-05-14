
<h2><?php echo $topic['Topic']['title']; ?></h2>

<div class="container">
	
	<?php

		foreach($topic['Post'] as $post) {
			echo $post['body']."<br><br>";
		}

	?>

</div>
