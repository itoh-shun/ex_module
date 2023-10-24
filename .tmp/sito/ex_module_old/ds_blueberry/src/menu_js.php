<?php
echo <<<EOD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
<script>
	function click_sp_menu() {
		$('.sp_gnavi').slideToggle('slow');
	}
	function click_user_menu() {
		$('.user_menu').slideToggle('slow');
	}
</script>
EOD;
?>