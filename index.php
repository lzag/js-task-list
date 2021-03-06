<?php require 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Task List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

	<!-- Form for adding the particular tasks -->

	<div class="container">
		<div class="row">
			<div class="col md-6 my-4">
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Add task</label>
						<input type="text" class="form-control" id="list-item-input" placeholder="Enter task...">
						<small id="emailHelp" class="form-text text-muted">Stay organized!</small>
					</div>
					<jsbutton class="btn btn-success" id="addButton">Add</jsbutton>
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
		<!-- The task list -->

		<div class="row">
			<div class="col md-6">
				<p class="h4">Your saved tasks: </p>
				<ul class="list-group" id="task-list">

					<?php if ($tasks = get_tasks()) : ?>
					<?php foreach ($tasks as $task) : ?>
					<li class="list-group-item"><?php echo $task; ?>
 					<button type="button" class="close" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
					</button>
					</li>
					<?php endforeach; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>

	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="app.js"></script>
</body>

</html>
