<?php
    session_start();

    $conn = new mysqli("localhost", "root", "122121", "project");
    $id = addslashes($_POST['id']);
    $pw = $_POST['pw'];
	$Level = '1'.$_POST['Level'];
	$hash_pw = hash("sha256","$pw");
	$Add_String = $id.$pw.$Level;
	if(preg_match("/select|and|or|limit|union|\'|\=|\"|\>|\<|\\s/i",$Add_String)){
?>			<script>
				alert("SQLI Danger!!");
				history.back();
			</script>
<?php
	}else{
  		$sql = $conn->prepare("SELECT * FROM users where id = ? and pw = ? and  Level = $Level;");
		$sql->bind_param("ss", $id, $hash_pw);

		$sql->execute();

		$result = $sql->get_result();
		$row = $result->fetch_assoc();


		if($row['id']){
    		$_SESSION['userid'] = $row['id'];
    		if(isset($_SESSION['userid'])){
?>          		<script>
                		alert("Login Success");
                		location.replace("post.php");
            		</script>
<?php
      		}
      		else{
          		echo "Login Fail";
      		}
?>
<?php
		}else{
?> 				<script>
                  	alert("Incorrect id or pw");
                  	history.back();
         		</script>
<?php
			}

		}
?>
