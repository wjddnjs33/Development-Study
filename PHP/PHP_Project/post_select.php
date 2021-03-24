<?php
    // mysql connect
	session_start();
	$rand = mt_rand(4721, 9999999);
	$nonce = hash("sha256",$rand);
    $conn = new mysqli("127.0.0.1", "root", "122121", "post");
	header("Content-Security-Policy: default-src 'nonce-{$nonce}'");
	$id = $_GET['id'];

	if($_SESSION['userid']){
			if(preg_match("/union|select|information|\+|in|group|concat|and|or|sleep|\'|\=|\>|\<|\"|_/i",$id)){
  	?>							<script nonce=<?=$nonce?>>
										alert("Danger SQLI!!");
										location.replace("select.html");
								</script>
<?php
			}else{
    			$sql = $conn->prepare("SELECT * FROM POST where _id = ?");
				$sql->bind_param("i", $id);
    			$sql->execute();

				$result = $sql->get_result();
				while($row = $result->fetch_assoc()){
					$ID = $row['id'];
					$content = $row['description'];
					$title = $row['title'];
    				}
			}


	}else{
?>			<script nonce=<?=$nonce?>>
				alert("Permission denied");
				location.replace("index.html");
			</script>
<?php
	}
?>


<!DOCTYPE html>
<head>
	<html>
		<link rel='stylesheet' href='test.css'>
	</html>
</head>
<body>
	<h1>Query : SELECT * FROM where id = <?=$id?></h1>
	<br>
	<div class='container'>
	<article>
		<section class="container">
			<form action="process_create.php" method="POST">
				<h2>Title</h2>
				<blockquote>
				<p>
					<h3><?=$title?></h3>
				</p>
				</blockquote>
				<br>
				<h2>Contents</h2>
				<blockquote>
					<div style='height:400px; width:500px;'>
						<h3><?=$content?></h3>
					</div>
				</blockquote>
			</form>
			<form action="delete.php" method='POST'>
				<input type='text' name='pin' placeholder='Admin Pin'>
				<input type='hidden' value='<?=$id?>' name='id'>
				<input type='submit' value='Remove'>
			<form>
		</section>
	</article>
	</div>
</body>
