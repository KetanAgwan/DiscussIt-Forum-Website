  
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="Responsive/contactModalCSS.css">
 <style type="text/css">
   *{
    margin: 0px;
    padding: 0px;
  }
  
  .modal {
    display: none;
    position: fixed; 
    z-index: 10; 
    top: 0;
    left: 0;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.6); 
  }
  
  .form1{
    padding: 5px;
    border-radius: 8px;
    box-shadow: 3px 3px 5px black;
    background: #2C3E50;
    color: white;
  }

 .elements2{
  width: 20vw;
  height: 50vh;
  padding: 40px; 
  position: relative;
}
.closeX
{
  font-size: 30px;
  font-weight: 5;
  background:transparent;
  color: white;
  border-style: none;
  cursor: pointer;
  position: absolute;
  right: -100px;
  top: 35px;
  margin-right: 5px; 
}

.contactInfo{
	height: 500px;
	width: 450px;
}

.info{
	height: 500px;
	width: 450px;
	display: flex;
	align-items: center;
	justify-content: space-around;
	flex-direction: column;
	font-size: 20px;
	line-height: 25px;
}

.mediaLinks{
	width: 250px;
	display: flex;
	align-items: center;
	justify-content: space-between;
}

.me{
	filter: drop-shadow(2px 2px 4px black);
	border-radius: 50%;
}

.links{
	filter: drop-shadow(2px 2px 4px black);
	transition: 0.3s;
}

	.insta1:hover{
       transform: scale(1.2); 
	}
	.fb1:hover{
       transform: scale(1.2);
	}

	.in1:hover{
       transform: scale(1.2);
	}

</style> 
</head>
<body>
  <div id="contactModal" class="modal">
    <div class="elements2">
      <button type="close" class="closeX" id="close3">&times;</button>
      <div class="form1 contactInfo">
      	<div class="info">
      		<img class="me" src="images/me.png" width="200px" id="me"><label for="me">Ketan Agwan</label>
      		contact no:- 9021778297<br><br><br>
      		Email:- ketanagwan7597@gmail.com<br><br><br>
      		social media:-<br><br><br>
      		<span class="mediaLinks">
      			<a href="https://www.instagram.com/ketanagwan/" target="_blank"><img src="images/insta.png" width="50px" class="links insta1"></a>
      			<a href="https://www.facebook.com/ketan.agwan" target="_blank"><img src="images/facebook.png" width="50px" class="links fb1"></a>
      			<a href="https://www.linkedin.com/in/ketanagwan/" target="_blank"><img src="images/linkedin.png" width="50px" class="links in1"></a>
      		</span>
      	</div>
      </div>
      </div>
    </div>
  </body>
  </html>