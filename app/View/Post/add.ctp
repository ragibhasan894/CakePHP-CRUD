
<div class='container'>
<h2>Create Post</h2>

<table class='table'>
<?php

	echo $this->Form->create('Post');
	//echo $this->Form->input('user_id');
	echo $this->Form->input('topic_id');
	echo $this->Form->input('body');
	echo $this->Form->end('Save post');

?>
</table>
</div>