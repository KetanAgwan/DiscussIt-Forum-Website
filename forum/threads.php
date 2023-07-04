<?php include 'partials\_dbconnect.php'; ?>
<?php include 'partials\_header.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DiscussIt</title>
	<style type="text/css">
		*{
			margin:0px;
			padding: 0px;
		}
		body{
			width: 100vw;
			height: 100vh;
		}

		.thread-container{
			width: 100vw;
			height:auto;
		}

		.pagetitle{
			width: 100vw;
			padding: 10px;
			text-align: center;
			display: inline;
		}

		.row{
			width: 100vw;
			height: 100vh;
			display:flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}

	

		/*this is for jombotrom styles*/
		.jumbotron-container{
			width: 100vw;
			height: 35vh;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.jumbotron{
			width: 50vw;
			min-height: 20vh;
			margin:0px 5px; 
			background:transparent;
			box-shadow: -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			padding: 20px;
			text-align: center;
			line-height: 30px;
			border-radius: 8px;
			backdrop-filter:blur(10px);
		}
		.jumbo-title{
			margin-bottom: 20px;
		}
		
		.jumbo-btn{
			width: 100px;
			height: 50px;
			background-color: #DC7633;
			margin-left: 5px;
			cursor: pointer;
			display: inline-block;
			border-radius: 8px;
			margin-top: 20px;
		}
		.jumbo-btn:hover{
			background-color: #D35400;
			color: #FFF;
		}

		/*this css is for questionns and media objects*/

		.browse-qns{
			width: 100vw;
			height: 10vh;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column;
		}

		.media-object {
			min-height: 70px;
			background: rgba(47, 66, 84,0.5);
			padding: 30px;
			width: 50vw;
			margin: 10px;
			border-radius: 8px;
			color: solid black;
			z-index: 2;
			/* position: relative;*/
		}
		.media-object img {
			width: 50px;
			height: 50px;
			float: left;
			margin: 10px;
		}
		.media-object h3 {
			font-weight: 500;
			margin: 25px 0px;
		}
		.media-object p{
			float: bottom;
		}    
		.media-object a{
			color: black;
		} 
		.media-object a:visited{
			color: black;
		}
		.media-object a:active{
			color: black;
		}
		.media-object a:hover{
			color: #DC7633;
			border-bottom: 1px #DC7633: 
		}

		.media-threads-container{
			width: 100vw;
			height: auto;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-flow: column;
		} 


	</style>
	<!-- this css is for comment from  -->
	<style type="text/css">
		.thread-form{
			background:transparent;
			box-shadow: -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			width: 50vw;
			min-height: 20vh;
			border-radius: 8px;
			padding-left: 15px;
			padding-top: 30px;
			padding-right: 15px; 
		}
		.thread-form-inputs {
			width: 50vw;
			height: 30px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 8px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			font-size: 16px;
			resize: vertical;
		}

		.thread-form-submit {
			background: linear-gradient(to left bottom, #08de2d, #00d692, #00c7d3, #00b2ed, #1599e0);
			background-size: 400% 400%;
			padding: 12px 20px;
			border-radius: 8px;
			cursor: pointer;
			margin-bottom: 5px;
		}

		.thread-form-submit:hover {
			box-shadow: 0px 0px 5px 5px #04F843;
			animation: btnHover 1.5s ease infinite;background-color: #D35400;
		}     

		.thread-form-container{
			width: 100vw;
			height: auto;
			display: flex;
			justify-content: center;
		}

		/*this is for alert*/
		.alert {
			padding: 20px;
			color: white;
			text-align: center;
			display: block;
		}

		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 22px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		.closebtn:hover {
			color: black;
		}
	</style>
</head>
</head>
<body>
	<?php
	$id = $_GET['threadid'];
	$sql = "SELECT * FROM `threads` WHERE thread_id = $id;";
	$result = mysqli_query($connection,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		$title = $row['thread_title'];
		$desc = $row['thread_desc'];
		$thread_user_id = $row['thread_user_id'];
			//Query for gettting user name who posted the thread
		$sql2 = "SELECT user_name FROM `users` WHERE sno=$thread_user_id;";
		$result2 = mysqli_query($connection,$sql2);
		$row2 = mysqli_fetch_assoc($result2);
		$posted_by = $row2['user_name'];
	}
	?>

	<?php
	//this for inserting comment into comments into db
	$showAlert = false;
	$Allow = true;
	$word = array("instagram","facebook","google","whatsapp");
	$method =  $_SERVER['REQUEST_METHOD'];
	if ($method=='POST' && isset($_POST['submit'])) {
		$comment = $_POST['comment'];
		for ($i=0; $i < sizeof($word); $i++) {
			$lowerComment = strtolower($comment);
			if (strpos($lowerComment, $word[$i]) !== false) {
				$Allow = false;
				$showAlert = true;
				if ($showAlert) {
					echo '<div class="alert" style="background-color:red;">
					<span class="closebtn">&times;</span> 
					<strong>UnSuccess!</strong> Your comment have not been added.It contains some bad word.
					</div>';
				}
			}
		}
		if($Allow){ 
			$comment = str_replace("<", "&lt;", $comment);
			$comment = str_replace(">", "&gt;", $comment);
			$sno = $_POST['sno'];
			$sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '$sno', current_timestamp()); ";
			$result = mysqli_query($connection,$sql);
			$showAlert = true;
			if ($showAlert) {
				echo '<div class="alert">
				<span class="closebtn">&times;</span> 
				<strong>Success!</strong> Your comment have been added.
				</div>';
			}
		}
	}

	?>



	<div class="thread-container">
		<div class="jumbotron-container">
			<div class="jumbotron">
				<div class="jumbo-title"><h1> <?php echo $title;?></h1></div>
				<div class="jumbo-text"><p><h4><?php echo $desc; ?></h4></p>
				</div>
				<hr>
				<div class="link-desc">
					Keep it friendly.
					Be courteous and respectful. Appreciate that others may have an opinion different from yours.
					Stay on topic.Share your knowledge.Refrain from demeaning, discriminatory, or harassing behaviour and speech.
				</div>
				<div>
					<p>Posted by:<b class="highLight"><?php echo $posted_by ?></b></p>
				</div> 
			</div>
		</div>
	</div>


	<!-- this is comment filling form -->
	<?php
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
		echo '<div class="thread-form-container">
		<form action="'. $_SERVER['REQUEST_URI'] .'" method="POST" class="thread-form">
		<h2 style="margin:5px;">Post a Comment</h2>
		<label for="problem">Type Your Comment :</label><br>
		<textarea id="comment" name="comment" class="thread-form-inputs" placeholder="Explain your solution here..." style="height:100px"></textarea><br>
		<input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
		<button type="submit" name="submit" class="thread-form-submit">Post Comment</button>
		</form>
		</div>';
	}
	else{
		echo'<center>
		<div class="media-object" style="width:49vw;margin-left:40px;">
		<h1>Your comment goes here,but youre not logged in please log in to start discussion.</h1>
		</div>
		</center>';
	}
	?>
	

	<div class="browse-qns">
		<h2 style="margin:15px 0px;">Discussions</h2>
	</div>
	<div class="media-threads-container">


		<?php
		$id = $_GET['threadid'];
		$sql = "SELECT * FROM `comments` WHERE thread_id = $id;";
		$noResult = true;
		$result = mysqli_query($connection,$sql);
		while ($row = mysqli_fetch_assoc($result)){
			$noResult = false;
			$id = $row['comment_id'];
			$content = $row['comment_content'];
			$comment_time = $row['comment_time'];
			$thread_user_id = $row['comment_by'];

			$sql2 = "SELECT user_name FROM `users` WHERE sno=$thread_user_id;";
			$result2 = mysqli_query($connection,$sql2);
			$row2 = mysqli_fetch_assoc($result2);
			$user_name = $row2['user_name'];


			echo '<div class="media-object">
			<img src="images/user.png">
			<b>Comment by: '.$user_name.' at '.$comment_time.'</b>
			<p class="text1">'.$content.'</p>
			</div>';
		}

		if ($noResult) {
			echo '<div class="media-object">
			<h2>There are no Discussion here...</h2>
			<h4>Be the first person to comment</h4>
			</div>';
		}

		?> 
	</div>
 <?php include 'partials\_footer.php' ?>
</body>
<script type="text/javascript">
	let closebtn = document.querySelector(".closebtn");
	// let alert1 = document.getElementsByClassName("alert");
	closebtn.onclick = function(){
		closebtn.parentElement.style.display = "none";
	}
</script>
</html>
