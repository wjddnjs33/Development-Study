<h1 align='center'><a href="http://141.164.55.161:8080/chall_2">Challenge 2</a></h1>
<?php
	header("Authenticate: bblrkauuynzjzo");
	class flag2 {
		public $check2;
    	public function __construct() {
			$this->check2 = $check2;
		}

    	public function __toString(){
			if(md5($this->check2)===md5("4edc6adb2887ec857f7d51282f043a06")){
				 readfile('/flag2');
			}
    	}
	}

	class flag {
    	public $str;
    	public $check;
    	public function __construct($str) {
        	$this->str = $str;
    	}
		public function getflag1(){
    		if(md5($this->check)===md5("4edc6adb2887ec857f7d51282f043a06")){
    			return readfile('/flag');
    		}
        	return $this->str;
    	}
    	public function __wakeup(){
        	if(stristr($this->str, "py")!==False)
            	 $this->str = "Hello py";
        	else
            	$this->str  = "<br>Who?";
    	}
    	public function __destruct() {
        	echo $this->getflag1();
    	}
	}


	$pw = "aklfmknqekfnkqfnklqefmklqjiofnlknmkflnkqrnf";
	$page = $_SERVER["PHP_SELF"];

	$username = $_GET['username'];
	$password = $_GET['password'];

	if(($username == "admin") and (strcmp($password, $pw)==0)){
		$auth = 1;
	}
	else{
		echo "Not";
	}
	if($auth == 1){
		if(isset($_GET['input'])){
    		$input = $_GET['input'];
			unserialize($input);
		}
	}
	else{
		echo "<br>You are not Admin";

	}

?>


<html>
<head>
    <title>Challenge 2</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="content container">
        <header class="page-header">
        </header>
        <div class="row">
            <div class="col-md-16">
            </div>
        </div>
    </div>
	<!-- Key Type : md5 -->
</body>
</html>