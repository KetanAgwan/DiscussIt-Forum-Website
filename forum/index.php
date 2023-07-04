<?php include 'partials\_dbconnect.php' ?>
<?php include 'partials\_header.php' ?>
<!-- <?php include 'partials\_footer.php' ?>  -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Responsive\indexCSS.css">
	<title>DiscussIt</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.container{
			min-width: 70vw;
			min-height: 80vh;
			position: relative;
		}

		/*this is for text animation*/

		.text-anime-container{
			width: 100vw;
			height: 100px;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.text-anime-container .words{
			position: relative;
			font-size: 30px;
			font-weight: 600;
		}

		.words{
			padding: 5px;
			margin: 2px;
		}

		.first-text{
			color: #fff;
		}

		.sec-text::before{
			content: "";
			position: absolute;
			top:0;
			left: 0;
			width: 100%;
			height: 100%;
			background: #313131;
			border-left: 2px solid #08de2d;
			animation: textAnimation 4s steps(12) infinite;
		}

		/*text animation ends here*/

		.pagetitle{
			width: 100vw;
			padding: 10px;
			text-align: center;
			display: inline;
			background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
		}

		.row{
			width: 100vw;
			min-height: 110vh;
			display:flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}

		.card{
			width: 300px;
			height: 280px;
			margin:10px;
			padding: 10px;
			align-items: center; 
			overflow: hidden; 
			transition: height 0.5s ease;
			position: relative;
			border-radius: 12px;
			background: transparent;
			backdrop-filter:blur(10px);
			box-shadow:  -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
			z-index: 3;
		}

		.card-title{
			width: 300px;
			height: 10px
		}

		.card:hover{
			height: 360px;
			border-radius: 12px;
			border-radius: 16px;
			box-shadow:  -6px -6px 18px #1f1f1f,
			6px 6px 18px #434343;
		}


		.view-threads{
			width: 100px;
			height: 40px;
			color: black;
			background: linear-gradient(to left bottom, #08de2d, #00d692, #00c7d3, #00b2ed, #1599e0);
			background-size: 400% 400%;
			margin-left: 5px;
			cursor: pointer;
			overflow: hidden;
			display: inline-block;
			border:none;
			border-radius: 8px;
			position: absolute;
			bottom: 5px;
			left: 5px;
			
		}
		.view-threads:hover{
			box-shadow: 0px 0px 5px 5px #04F843;
			animation: btnHover 1s ease infinite;
		}
		.text{
			display: none;
			overflow-y: scroll;
			width: 100%;
			height: 150px;
			position:static;
			overflow-y: scroll;
			-ms-overflow-style:none;
			scrollbar-width:none;
			background: transparent;

		}

		.text::-webkit-scrollbar{
			display: none;
		}

		.card:hover .text{
			display: block;
		}
		.slideshowDiv{
			display: inline;
			width: 80vw;
			height: 40vh;
			border:1px solid red; 
		}
		.img img{
			border-radius: 8px;
			box-shadow: 10px 10px 15px rgba(27,28,28,0.9);
		}	 

		.right-img{
			width: 600px;
			height: 600px;
			position:absolute;
			bottom: 0;
			right: 0;
			z-index: 2;
		}

	</style>
	<style type="text/css">
		@keyframes textAnimation{
			40%,60%{
				left: 100% ;
			}
			100%{
				left:0%;
			}
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="text-anime-container">
			<span class="words first-text">Ask about</span>
			<span class="words sec-text highLight">Javascript</span>
		</div>
		<span class="pagetitle"><h2 class="highLight">DiscussIt-Categories</h2></span>
		<div class="row">
			<!-- fetch chategories usinh loop -->
			<?php
			$imgno =1;
			$sql = "SELECT * FROM `categories`;";
			$result = mysqli_query($connection,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$id= $row['category_id'];
				$category = $row['category_name'];
				$desc = $row['category_discription'];
				echo '<div class="card">
				<div class="img">
				<img src="images/bg'.$imgno.'.jpeg" width="300" height="180">
				</div>
				<span class="card-title">
				<h3 class="highLight" style="margin: 5px;">'.$category.'</h3>
				</span>
				<p class="text">'.$desc.'</p>
				<div>
				<a href="threadlist.php?catid='.$id.'"><button class="view-threads" id="'.$id.'">View Threads</button></a>
				</div>
				</div>';
				$imgno++;
			}

			?>
			<img src="images/color-scheme-right1.png" class="right-img">

		</div>
		<?php include 'partials\_footer.php' ?>
	</div>
</body>
<script type="text/javascript">
	const textBox = document.querySelector(".sec-text");

	const textLoad =()=>{
		setTimeout(()=>{
			textBox.textContent = "Javascript";
		},0);

		setTimeout(()=>{
			textBox.textContent = "Django";
		},4000);
 
		setTimeout(()=>{
			textBox.textContent = "HTML";
		},8000);
	}

	textLoad();
	setInterval(textLoad,12000);
</script>
</html>

