<?php
//gives me access to this path variable
require_once(__DIR__ . "/../model/config.php");
?>


<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!-- giving the ability to sign up -->
<div>
	<label for="email">Email: </label>
	<input type="text" name="email" />
</div>

<div>
	<label for="username">Username: </label>
	<input type="text" name="username" />
</div>

<div>
	<label for="Password">Password: </label>
	<input type="password" name="password" />

</div>

<div>
	<button type="submit">Submit</button>
</div>
</form>

