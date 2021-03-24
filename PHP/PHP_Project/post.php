<?php

    // mysql connect
	session_start();
    $conn = mysqli_connect("localhost", "root", "122121", "post");
    $sql = "SELECT * FROM POST";
    $result = mysqli_query($conn, $sql);
    $list = '';
	if($_SESSION['userid']){
    while($row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"post_select.php?id={$row['_id']}\">{$row['title']}</a></li>";
   		}
	}
	else{
?>		<script>
			alert("Permission denied");
			location.replace("index.php");
		</script>
<?php
	}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel='stylesheet' href='test.css'>
		<meta charset='utf-8'>
	</head>
</html>
<a href="#main" class="skip-link">Skip to main content</a>
<header>
	<div class="container">
		<h1>
		<?php
        	$connect = mysqli_connect('localhost', 'root', '122121', 'project') or die ("connect fail");
        	$query ="select * from board order by id desc";
        	$result = $connect->query($query);
        	$total = mysqli_num_rows($result);

        	session_start();

        	if(isset($_SESSION['userid'])) {
           		echo $_SESSION['userid'];?>님 안녕하세요
				<form action='Logout.php' method='POST'>
					<input type='submit' value='Logout'>
				</form>
            	<br/>
    	<?php
        	}
        	else {
    	?>       	<button onclick="location.href='./index.html'">로그인</button>
          	<br />
    	<?php
          	}
    	?>
		</h1>
		<h2><pre>Welcome to the vulnerable site. This site has many vulnerabilities.
		So please hack it. If I find something I haven't found, I'll give you a small gift.</pre>
		</h2>
		<a href="conn.html" class="link-github">
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false">
					<path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path>
				</svg>
			</span>
			Star on Webshell</a>
	</div>
</header>
<nav>
	<ul>
		<li>
			<a href="#about">About</a>
		</li>
		<li>
			<a href="create.html">Write a post</a>
		</li>
		<li>
			<a href="#View_Post">View Post</a>
		</li>
		<li>
			<a href="#File">File</a>
		</li>
		<li>
			<a href="select.html">Search specific posts</a>
		</li>
		<li>
			<a href="#">Resources</a>
		</li>
	</ul>
</nav>

<main id="main" tabIndex="-1">
	<div class="container">
		<article id="about">
			<section class="container">
				<h2>Welcome to the PY World?</h2>

				<blockquote>
					<p>This site is a vulnerable site designed to study web hacking. However, don't do automated tools and scanners, DOS, and DDOS attacks as this can overload your web server.
					</p>

				</blockquote>
			</section>
			<section class="container">
				<h2>Vulnerabilities that arise</h2>
				<p>
				In this server, we will continue to develop various vulnerabilities in the future.
				We are new to web development, so we ask for your understanding. Thank you.
				</p>
				<p>List of vulnerabilities that occur</p>
				<ul>
					<li>SQLI</li>
					<li>XSS</li>
					<li>SSRF</li>
					<li>SSTI</li>
					<li>LFI</li>
					<li>RFI</li>
					<li>RCE</li>
					<li>PHP Object Injection</li>
					<li>Race Condition</li>
					<li>CSRF</li>
					<li>Nosql Injection</li>
				</ul>
				<p>
					More vulnerabilities as above will be added in the future, and various vulnerabilities will be added.
				</p>
			</section>
		</article>

		<article id="View_Post">
			<section class="container">
				<h2>View Post</h2>
			</section>
			<section class="container">
				<blockquote>
					<ol>
						<?=$list?>
					<ol>
				</blockquote>
			</section>
		</article>
	</div>
</main>
<aside class="profile" aria-labelledby="profile-title">
	<div class="container">
		<h4 id="profile-title">Server information</h4>
		<ul>
			<li class="OS">
				<span>OS : </span>
				<span>Ubuntu 20.04.1 </span></li>
			<li class="server">
				<span>Server : </span>
				<span>Apache/2.4.41 </span></li>
			<li class="PHP">
				<span>Language : </span>
				<span>PHP 7.2.33-1</span>
			</li>
			<li class="DB">
				<span>Database : </span>
				<span>8.0.21-0ubuntu0.20.04.4 for Linux on x86_64 (Ubuntu)</span>
			</li>
		</ul>
	</div>
</aside>
<article id="File">
	<section>
		<aside id="styles">
			<div class="container">
				<h2> File Download</h2>
				<blockquote>
					<a href="download.php?org_filename=flag.txt&real_filename=index.php">index.php</a>
				</blockquote>
			</div>
		</aside>
	</section>
</article>
<footer class="page-footer">
	<div class="container">
		<ul>
			<li>
				<a href="https://open.kakao.com/o/sqOCydkc" class="link-twittercontact">Open Kakao</a>
			</li>
			<li>
				<a href="https://p00y.tistory.com" class="link-github">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false">
						<path d="M32 12.408l-11.056-1.607-4.944-10.018-4.944 10.018-11.056 1.607 8 7.798-1.889 11.011 9.889-5.199 9.889 5.199-1.889-11.011 8-7.798z"></path>
					</svg>
					Star on Tistory</a>
			</li>
		</ul>
	</div>
</footer>
