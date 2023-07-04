<?php include 'partials\_dbconnect.php' ?>
<?php include 'partials\_header.php' ?>
<!-- <?php include 'partials\_footer.php' ?>  -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DiscussIt</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.li1{
			list-style-type: disc;
			margin-left: 15px;
		}
		.container{
			width: 100vw;
			height: auto;

		}
		.row{
			width: 100vw; 
			height: 100vh;
			display: flex;
			align-items: center;
			flex-direction: column;
		}

		.head{
			width: 100vw;
			text-align: center;
			margin: 25px;
		}

		.result{
			width: 50vw;
			min-height: 50px;
			/*border:1px solid red;*/
			padding: 10px;
			margin: 10px;
			backdrop-filter:blur(10px);
			box-shadow:  -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			line-height: 20px;
			border-radius: 8px;
		}

		.res-desc{
			margin: 5px;
		}

		div h3 a{
			color: black;
		}

		div h3 a:hover{
			color:#00f69a;
			text-decoration: underline;
			text-underline-position:under;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="head">
			<h1>Search Results for <span class="highLight"><em>"<?php echo $_GET['search']; ?>"</em></span></h1>
		</div>
		<div class="row">
			<?php
			$noResults = true;
			$count = 0;
			$searchQuery = $_GET["search"];
			$sql = "SELECT * FROM `threads` WHERE MATCH (thread_title,thread_desc) AGAINST ('$searchQuery');";
			$result = mysqli_query($connection,$sql);
			if ($count=mysqli_num_rows($result)) {
				echo $count." Results are found.";
			}
			while ($row = mysqli_fetch_assoc($result)){
				$noResults = false;
				$count++;
				$title = $row['thread_title'];
				$desc = $row['thread_desc'];
				$thread_id = $row['thread_id'];
				$url = "threads.php?threadid=".$thread_id;

				echo '<div class="result">
				<h3><a href="'.$url.'">Q.'.$title.'</a></h3>
				<p class="res-desc">'.$desc.'</p></div>';
			}
			if ($noResults) {
				echo '<div class="result">
				<h2>sorry! There are no results as per your search...</h2>
				Suggestions:
				<ul>
				<li class="li1">Make sure that all words are spelled correctly.</li>
				<li class="li1">Try different keywords.</li>
				<li class="li1">Try more general keywords.</li>
				</ul>
				</div>';
			}
			?>
		</div>
		<?php include 'partials\_footer.php' ?>
	</div>
</body>

</html>

