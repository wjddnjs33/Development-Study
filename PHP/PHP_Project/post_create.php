<?php
    // mysql connect
	session_start();
    $conn = new mysqli("localhost", "root", "122121", "post");
	$pin = $_POST['pin'];
	$title = $_POST['title'];
	$title = htmlentities($title);
	$content = $_POST['description'];
	$content = htmlentities($content);
	$Add_String = $title.$content;



    $sql = $conn->prepare("INSERT INTO POST(title, description) VALUES(?,?)");
	$sql->bind_param("ss", $title, $content);


	if($pin == "qwer3626@"){
		if($_SESSION['userid']){
			if($title){
				$sql->execute();
				$sql->close();
				$conn->close();
?>
			<script>
				alert("Success!");
				location.replace("post.php");
			</script>
<?php
			}else{
?>					<script>
						alert("Please enter the Title");
						history.back();
					</script>
<?php


			}
		}else{
?>				<script nonce=nonce-EDNnf03nceIOfn39fn3e9h3sdfa>
					alert("Permission denied");
					location.replace("index.html");
				</script>

<?php
			}
	}else{
?>		<script>
			alert("You are not Admin");
			location.replace("post.php");
		</script>

<?php
	}
?>
