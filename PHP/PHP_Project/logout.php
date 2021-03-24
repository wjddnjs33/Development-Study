<?php
    session_start();
	session_unset();
    $result = session_destroy();
    if($result){
?><script>
          location.replace("index.php");
  </script>
<?php
    }
 ?>
