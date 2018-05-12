
<div class='container'>
<h2>Admin Log In</h2>

<table class='table'>
<?php

	echo $this->Form->create('Users');
	//echo $this->Form->input('user_id');
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Log In');

?>
</table>
</div>