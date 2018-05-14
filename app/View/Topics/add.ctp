
<div class='container'>
<h2>Create Topic</h2>

<table class='table'>
<?php

	echo $this->Form->create('Topic');
	//echo $this->Form->input('user_id');
	echo $this->Form->input('title');
	echo $this->Form->input('visible');
	echo $this->Form->end('save topic');

?>
</table>
</div>
