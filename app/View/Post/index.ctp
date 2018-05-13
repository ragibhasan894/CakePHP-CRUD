<!--
<div class="container">

<h2>All Posts</h2>
<div class="jumbotron">
<table class="table">
	<tr>
		<th>Topic</th>
		<th>Content</th>		
	</tr>

	<?php foreach($posts as $post) : ?>
	<tr>

		<td><?php echo $this->HTML->link($post['Topic']['title'], array('controller'=>'post','action'=>'view',$post['Post']['topic_id'])); ?></td>

		<td><?php echo $this->HTML->link($post['Post']['body'], array('controller'=>'post','action'=>'view',$post['Post']['id'])); ?></td>
		
	</tr>
	<?php endforeach; ?>
	<?php unset($topic); ?>
	</div>
</div>
-->

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Posts</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">ALL Post</a>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-10">
		
		<?php foreach($posts as $post) : ?>

          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <h3 class="card-title"><?php echo $this->HTML->link($post['Topic']['title'], array('controller'=>'post','action'=>'view',$post['Post']['id'])); ?></h3>
              <p class="card-text"><?php echo $post['Post']['body']; ?></p>
            </div>
            <div class="card-footer text-muted">
              <p>Created on <?php echo $post['Post']['created']; ?></p>
            </div>
          </div>

          <br><br>

        <?php endforeach; ?>
		

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

<?php unset($topic); ?>