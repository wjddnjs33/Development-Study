<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Post Write</title>
	<link rel='stylesheet' href='test.css'>
  </head>
  <bodiy>
    <h1>Post Create!</h1>
			<article id="Write_a_post">
			<section class="container">
			<form action="process_create.php" method="POST">
				<h2>Please enter the title</h2>
				<blockquote>
				<p>
					<input style='height:30px; width:600px;' type='text' name='title' placeholder='Title'>
					<input style='heightL30px; width:600px;' type='text' name='pin' placeholder='Admin Pin'>
				</p>
				</blockquote>
				<br>
				<h2>Please enter the Contents</h2>
				<blockquote>
					<p><textarea style='height:500px; width:1000px;' name='description' placeholder='Contents'></textarea></p>
				</blockquote>
				<blockquote>
					<p><input type='submit' value='Create'></p>
				</blockquote>
			</form>
			</section>
		</article>
    </form>
  </body>
</html>


