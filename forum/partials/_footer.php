<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Responsive/footerCSS.css">
</head>
<style type="text/css">
	.footer{ 
		font-size: 16px;
		width: 100vw;
		background: transparent;
		text-align: center;
		color: white;
		z-index: 1;
		position:relative;
		bottom: 0;
		display: flex; 
		align-items: center;
		justify-content: center;
		flex-direction: column;
	}
	.footer-text{
		display: flex;
		align-items: center;
		justify-content: space-around;
		flex-direction: column;
		width: 100vw;
		height: 10vh;
		background:transparent;
		position: relative;
		z-index: 2;
		box-shadow: 0px 0px 10px black;
		backdrop-filter:blur(10px);
	}

	.footer-icons{
		width: 100vw;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.icons{
		width:30px;
		margin: 0px 10px;
		cursor: pointer;
	}
	.insta:hover{
		border-radius: 40%;
		box-shadow: 0px 0px 0px 2px #ed3ea1;
	}
	.fb:hover{
		border-radius: 40%;
		box-shadow: 0px 0px 0px 2px #3e7eed;
		background: #3e7eed;
	}

	.in:hover{
		/*box-shadow: 0px 0px 0px 2px #fff;*/
		background: #fff;
		cursor: pointer;
	}

	.blob2{
		border-radius: 100% 0% 0% 0%;
		bottom: 300px;
		right: 0;
		height: 300px;
		width: 300px;
		position: absolute;
		background: linear-gradient(98deg, rgba(53,247,76,1) 4%, rgba(52,238,95,1) 44%, rgba(45,164,253,1) 86%);
		background-clip: padding-box;
		box-shadow: 10px 10px 10px rgba(27,28,28,0.5);
		line-height: 1.5;
		z-index: 1;
	}
	.blob3{
		border-radius:0% 0% 0% 100% ;
		bottom: 0;
		right: 0;
		height: 300px;
		width: 300px;
		position: absolute;
		background: linear-gradient(98deg, rgba(53,247,76,1) 4%, rgba(52,238,95,1) 44%, rgba(45,164,253,1) 86%);
		background-clip: padding-box;
		box-shadow: 10px 10px 10px rgba(27,28,28,0.5);
		line-height: 1.5;
		z-index: 1;
	}

	
</style>
<html>
<body>
	<div class="footer">
		<div class="footer-text">
			<div class="footer-icons">
				<a href="https://www.instagram.com/ketanagwan/" target="_blank"> <img src="images\insta.png" class="icons insta"></a>
				<a href="https://www.facebook.com/ketan.agwan" target="_blank"> <img src="images\facebook.png" class="icons fb"></a>
				<a href="https://www.linkedin.com/in/ketanagwan/" target="_blank"> <img src="images\linkedin.png" class="icons in"></a>
			</div>
			Made with ♥️ By Ketan Agwan
		</div>
		<span class="blob2 blobs"></span>
		<span class="blob3 blobs"></span>
	</div>
</body>
</html>