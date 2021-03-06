<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<?php
		echo $this->Html->meta('icon');
		/*
		echo $this->Html->css(['bootstrap.min.css']);
		echo $this->Html->script(['bootstrap.min.js']);
		*/

		// echo $this->Html->script(['custom.js']);
		// echo $this->Html->script(['jquery-1.11.3.min.js']);
		// echo $this->Html->script(['jquery-migrate-1.2.1.min.js']);
		 echo $this->Html->script(['bootstrap.min.js']);
		 echo $this->Html->css(['bootstrap.min.css']);

		// echo $this->fetch('meta');
		// echo $this->fetch('script');
		// echo $this->fetch('css');		
	?>
</head>
<body>
	<div id="container" class="container table-responsive">
		<div id="header">
			<!-- <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1> -->
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- <div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div> -->
	</div>
</body>
</html>
