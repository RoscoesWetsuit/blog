<?php
//gives me access to this path variable
require_once(__DIR__ . "/../model/config.php");
?>

<h1>create blog post</h1>
	
	<!--form takes in info and send it to the table  -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title">title: </label>
		<input type"text" name="title" />
	</div>
		
	<div>
		<label for="post">post: </label>
		<textarea name="post"></textarea>
	</div>

	<div>
		<!-- creates a submit button -->
		<button type="submit">submit</button>
	</div>
</form>