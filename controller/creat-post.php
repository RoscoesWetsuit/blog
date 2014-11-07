<?php
//filters through title to make sure there is no hacks
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//same thing but through posts
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>";
echo "<p>Post: $post</p>";