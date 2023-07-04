<?php include 'partials\_dbconnect.php' ?>
<?php include 'partials\_header.php' ?>
<!-- <?php include 'partials\_footer.php' ?> -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Responsive\threadlistCSS.css">
	<title>DiscussIt</title>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
		}
		.thread-container{
			width: 100vw;
			height: auto;
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

		.card{
			width: 300px;
			height: 280px;
			margin:10px;
			border:1px solid black;
			align-items: center;
			border-radius: 8px;
			margin-top: 20px; 
			overflow: hidden; 
			transition: height .7s ease;
			position: relative;
		}

		.card-title{
			width: 300px;
			height: 10px
		}


		.view-threads{
			width: 100px;
			height: 40px;
			color: white;
			background-color: #DC7633;
			margin-left: 5px;
			cursor: pointer;
			display: inline-block;
			border-radius: 8px;
			position: absolute;
			left: 0;
			bottom: 0;
		}
		.view-threads:hover{
			background-color: #D35400;
		}
		.text{
			display: none;
			overflow-y: scroll;
			width: 100%;
			height: 150px;
			position:static;
			overflow-y: scroll;
		}

		.card:hover .text{
			display: block;
		}
		.card:hover{
			height: 410px
		}
		.slideshowDiv{
			display: inline;
			width: 80vw;
			height: 40vh;
			border:1px solid red;
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
			height: 30vh;
			margin:10px 0px 20px 0px; 
			/*background: rgba(47, 66, 84,0.5);*/
			background: transparent;
			padding: 20px;
			text-align: center;
			line-height: 30px;
			border-radius: 8px;
			box-shadow: -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			backdrop-filter:blur(10px);
		}
		.jumbo-title{
			margin-bottom: 20px;
		}
		.jumbo-text{
			margin-bottom:;
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
			box-shadow: -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			padding: 30px;
			width: 50vw;
			margin-bottom:20px;
			border-radius: 8px;
			color: solid black;
			z-index: 2;
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
			color:#00f69a;
						text-decoration: underline;
			text-underline-position:under;
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
	<!-- this css is for form  -->
	<style type="text/css">
		.thread-form{
			/*background: rgba(47, 66, 84,0.5);*/
			background: transparent;
			box-shadow: -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			width: 50vw;
			min-height: 25vh;
			border-radius: 8px;
			padding-left: 15px;
			padding-top: 30px;
			padding-right: 15px; 
			backdrop-filter:blur(10px);
		}
		.thread-form-inputs {
			width: 50vw;
			height: 30px;
			padding: 20px;
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
			animation: btnHover 1.5s ease infinite;
		}     

		.thread-form-container{
			width: 100vw;
			height: auto;
			display: flex;
			justify-content: center;
		}

		/*//this is for aler*/
		.alert {
			padding: 20px;
			color: white;
			text-align: center;
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
<body>
	<?php
	$id = $_GET['catid'];
	$sql = "SELECT * FROM `categories` WHERE category_id = $id;";
	$result = mysqli_query($connection,$sql);
	while ($row = mysqli_fetch_assoc($result)){
		$catname = $row['category_name'];
		$catdesc = $row['category_discription'];
	} 

	?>


	<?php
	//this for inserting thread into threads into db
	$showAlert = false;
	$Allow = true;
	$word = array("instagram","facebook","google","whatsapp");
	$method =  $_SERVER['REQUEST_METHOD'];
	if ($method=='POST') {
		$th_title = $_POST['title']; 
		$th_desc = $_POST['desc'];
		for ($i=0; $i < sizeof($word); $i++) {
			$lowerTitle = strtolower($th_title);
			$lowerDesc = strtolower($th_desc);
			if (strpos($lowerTitle, $word[$i]) !== false || strpos($lowerDesc, $word[$i]) !== false) {
				$Allow = false;
				$showAlert = true;
				if ($showAlert) {
					echo '<div class="alert" style="background-color:red;">
					<span class="closebtn">&times;</span> 
					<strong>UnSuccess!</strong> Your thread have not been added.It contains some bad words.
					</div>';
				}
			}
		}
		if($Allow){
			$th_title = str_replace("<", "&lt;", $th_title);
			$th_title = str_replace(">", "&gt;", $th_title);
			$th_desc = str_replace("<", "&lt;", $th_desc);
			$th_desc = str_replace(">", "&gt;", $th_desc);
			$sno = $_POST['sno'];
			$sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp()) ";
			$result = mysqli_query($connection,$sql);
			$showAlert = true;
			if ($showAlert) {
				echo '<div class="alert">
				<span class="closebtn">&times;</span> 
				<strong>Success!</strong> Your thread have been recorded please wait for community to respond.
				</div>';
			}
		}
	}

	?>
	<div class="thread-container">
		<div class="jumbotron-container">
			<div class="jumbotron">
				<div class="jumbo-title"><h1>Welcome to the <span class="highLight"><?php echo $catname;?></span> forums</h1></div>
				<div class="jumbo-text"><p><h4><?php echo $catdesc; ?></h4></p>
				</div>
				<hr>
				<div class="link-desc">
					Keep it friendly.
					Be courteous and respectful. Appreciate that others may have an opinion different from yours.
					Stay on topic.Share your knowledge.Refrain from demeaning, discriminatory, or harassing behaviour and speech.
				</div>
				<div>
				</div>
			</div>
		</div>
	</div>

	<?php

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
		echo '<div class="thread-form-container">
		<form action="'.$_SERVER['REQUEST_URI'].'" method="POST" class="thread-form">
		<h2> Post Your Problem</h2>
		<label for="problem_title">Problme title :</label><br>
		<input type="text" id="title" name="title" class="thread-form-inputs" placeholder="Enter problem in short..."><br>
		<input type="hidden" name="sno" value="'.$_SESSION['sno'].'">
		<label for="problem">Ellaborate your concern :</label><br>
		<textarea id="desc" name="desc" class="thread-form-inputs" placeholder="Explain your problme here" style="height:100px"></textarea><br>
		<button type="submit" class="thread-form-submit">Submit</button>
		</form>
		</div>';
	}
	else{
		echo'<div class="thread-form-container">
		<div class="thread-form" style="min-height:100px;">
		<h1>Your question goes here,but youre not logged in please log in to start discussion.</h1>
		</div>
		</div>';
	}
	?>

	<div class="browse-qns">
		<h2 style="margin:15px 0px;" class="highLight">Start a Discussion</h2> 
	</div>
	<div class="media-threads-container">

		<?php
		$id = $_GET['catid'];
		$sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id;";
		$result = mysqli_query($connection,$sql);
		$noResult = true;
		while ($row = mysqli_fetch_assoc($result)){
			$noResult = false;
			$id = $row['thread_id'];
			$title = $row['thread_title'];
			$desc = $row['thread_desc'];
			$thread_time = $row['timestamp'];
			$thread_user_id = $row['thread_user_id'];

			$sql2 = "SELECT user_name FROM `users` WHERE sno=$thread_user_id;";
			$result2 = mysqli_query($connection,$sql2);
			$row2 = mysqli_fetch_assoc($result2);
			$user_name = $row2['user_name'];


			echo '<div class="media-object">
			<img src="images/user.png">
			<b>Posted by: '.$user_name.' at '.$thread_time.'</b>
			<h3><a href="threads.php?threadid='.$id.'">Q.'.$title.'</a></h3>
			<p>'.$desc.'</p>
			</div>'; 
		}

		if ($noResult) {
			echo '<div class="media-object">
			<h2>There are no threads here...</h2>
			<h4>Be the first person to ask a question.</h4>
			</div>';
		}

		?>

	</div>
<?php include 'partials\_footer.php' ?> 
</body>

</html>
<script type="text/javascript">
	let closebtn = document.querySelector(".closebtn");
	// let alert1 = document.getElementsByClassName("alert");
	closebtn.onclick = function(){
		closebtn.parentElement.style.display = "none";
	}
</script>
