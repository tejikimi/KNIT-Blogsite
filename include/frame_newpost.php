<?php
include("bootstrap_cdn.php");
?>

<head>
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		.dropdown-item {
			display: block;
		}
	</style>
</head>

<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">New Post</div>
			<div class="panel-body">

				<!-- Default dropright button -->



				<!-- FORM STARTS HERE -->
				<form role="form" method="POST" action="newpost.php">
					<div class="form-group">
						<label class="control-label">Category</label>
						<select name="Select_name">
							<option value="Select Category">Select Category</option>
							<option value="Apple">Apple</option>
							<option value="Banana">Banana</option>
							<option value="Coconut">Coconut</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label">Title</label>
						<input type="text" class="form-control" name="postTitle">
					</div>

					<div class="form-group">
						<label for="Description">Description : </label>
						<textarea class="form-control" rows="8" id="content" name="postDesc">

  						</textarea>
						<script type="text/javascript">
							CKEDITOR.replace('content');
						</script>
					</div>

					<div class="form-group">
						<label class="control-label">Tag</label>
						<input type="text" class="form-control" name="postTag">
					</div>

					<button type="submit" class="btn btn-default" name="submit">
						Publish
					</button>
				</form>

				<!-- FORM ENDS HERE -->

			</div>
		</div>
	</div>
</div>
</div>