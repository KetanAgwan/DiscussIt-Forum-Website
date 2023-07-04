<?php session_start();?><!DOCTYPE html> 
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Responsive/headerCSS.css">
  <title></title>
  <style type="text/css">
    *{
      margin:0px;
      padding: 0px;
    }
    body{
      font-family: 'Quicksand', sans-serif;
    }
    body{
      background:#313131;
    }
    a{
      text-decoration: none;
    }

    li{
      list-style-type: none;
    }
    .highLight{
      background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    header{    
     display: flex;
     flex-direction: row;
     align-items: center;
     justify-content: space-between;
     padding: 0% 2%;
     height: 80px;
     border:2px solid transparent;
     background-clip: padding-box;
     line-height: 1.5;
     z-index: 2;
   }

   header .logo{
    color: black;
  }

  .logo{
   margin-bottom: 20px;
   /*filter:contrast(170%);*/
 }


 nav ul{
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  padding: 5px;
}

nav ul li{
  margin-left: 5px;
  margin-right: 5px;
}
nav ul li a{
  background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: block;
  padding: 5px 20px;
}
nav ul li a:hover{
  text-shadow: 0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5;
}
nav ul li button{
  background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: block;
  margin: 10px;
  border-radius: 1px;
  border:none;
  cursor: pointer;
  font-size: 16px;
}

nav ul li button:hover{
  text-shadow: 0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5;
}

.enter{
  background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
  -webkit-background-clip:text;
  -webkit-text-fill-color: transparent;
  border-style: solid;
  border-width: 2px;
  border-image: linear-gradient(to right,#08DE2D,#1197FD) 1 10%;
  border-radius: 8px;
  height: 40px;
  width: 70px;
}

.enter:hover{
 box-shadow: 0px 0px 5px 5px #04F843;
 cursor: pointer;
}

/*//this is drop down*/
.dropbtn {
 background: linear-gradient(to left bottom, #08de2d, #00e759, #00ef7b, #00f69a, #11fdb5);
 -webkit-background-clip: text;
 -webkit-text-fill-color: transparent;
 /*background: transparent;*/
 padding: 4px 10px;
 font-size: 16px;
 border: none;
 cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  /*background-color: #4f566b;*/
  min-width: 160px;
  background: linear-gradient(315deg, #2c2c2c, #343434);
  box-shadow:  -6px -6px 18px #1f1f1f,
  6px 6px 18px #434343; 
  z-index: 5;
}

.dropdown-content a {
  color: #DC7633;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  text-shadow: 0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  text-shadow: 0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5,0px 0px 0.5px #11FDB5;
}
 
.searchform{
  display: flex;
  align-items: center;
  justify-content: space-between; 
}
.search{
  width: 300px;
  height: 40px;
  padding: 10px;
  margin-top:0px;
  font-size: 16px;
  border-radius: 8px;
  background: transparent;
  border-image: linear-gradient(to right,#08DE2D,#1197FD) 1 10%;
  color: #11FDB5;
}
.search:focus {
  outline: none;
}
.searchbtn{
  width: 70px;
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

}
.searchbtn:hover{
 box-shadow: 0px 0px 5px 5px #04F843;
 animation: btnHover 1.5s ease infinite;
}
/*these are some commom classes in login modal and signup modal thats why im writing those here these are for inputs*/

.input-fields{
  width: 300px;
  height: 40px;
  border-radius: 8px;
  margin-bottom:30px; 
  font-size: 18px;
  opacity: 0.5;
}
.input-fields:focus{
  box-shadow: 5px 5px 7px black;
  background:transparent;
  color: white;
  outline: none;
  opacity: 1;
}

.form-title{
  width: 18vw;
  display: flex;
  justify-content: space-between;
  z-index: 3;
  text-align: center;
}


/*//this is for alert*/
.alert {
  margin: 0px;
  padding: 20px;
  color: #35db35;
  text-align: center;
  z-index: 2;
  background: green;
}

.closebtn {
  margin-left: 15px;
  color: black;
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

.username{
  margin: 8px 0px;
}


.blob1{
  border-radius: 0% 0% 100% 0%;
  /*border-radius: 0% 81% 15% 85% / 50% 0% 50% 0%;*/
  height: 400px;
  width: 400px;
  position: absolute;
  /*background: rgb(53,247,76);*/
  background: linear-gradient(98deg, rgba(53,247,76,1) 4%, rgba(52,238,95,1) 44%, rgba(45,164,253,1) 86%); 
  background-clip: padding-box;
  box-shadow: 10px 10px 10px rgba(27,28,28,0.5);
  line-height: 1.5;
  z-index: -5;
}

.logo{
  font-family: "Niagara Solid";
  font-size: 50px;
  font-weight: 550;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 10px;
  letter-spacing:1px;
}

.logo-part{
  color: orange;
  font-weight: 550;
}

#aboutUs{
  cursor: pointer;
}

</style>
<style type="text/css">
  /*this is for keyframes animation*/
  @keyframes btnHover{
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }
</style>
</head> 
<?php
echo'<body>
<span class="blob1"></span>
<header><a href="\forum" class="logo"><span class="logo"><img src="images/logo1.png" width="70px">DISCUSS<span class="logo-part">IT</span></span></a>
<nav>
<ul>
<form action="search.php" method="get" class="searchform">
<input type="search" name="search" class="search" id="searchbox">
<button type="submit" class="searchbtn" id="search">Search</button>
</form>
<li><a href="\forum">Home</a></li>
<li><a href="https://www.linkedin.com/in/ketanagwan/" target="_blank">About Us</a></li>
<li><div class="dropdown">
<p class="dropbtn">Top-Categories</p>
<div class="dropdown-content">';

$sql = "SELECT category_name,category_id FROM `categories` LIMIT 4;";
$result = mysqli_query($connection,$sql);
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a href="threadlist.php?catid='.$row['category_id'].'">'.$row["category_name"].'</a>';
}
echo'
</div>
</div></li>
<li><button id="contactUs">Contact</button></li><li>';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) { 
  echo '<h3 class="username highLight">Welcome '.$_SESSION["user_name"].'</h3>';
  echo '<li><a href="partials/_logout.php"><button class="enter" id="logout">Logout</button></a></li>';
}
else{
  echo'<li><button class="enter" id="login">Login</button></li>
  <li><button class="enter" id="signup">SignUp</button></li>';
} 
echo'</li>
</ul>
</nav>
</header>
</body>';
include 'partials/_loginmodal.php'; 
include 'partials/_singupmodal.php';
include 'partials/_contactmodal.php';
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
  echo '<div class="alert" id="successalert">
  <span class="closebtn" id="successclose">&times;</span> 
  <strong>Success!</strong> You can login now.
  </div>';
}
?>
<script type="text/javascript">
   // this is for contact us modal
  let modal3 = document.getElementById("contactModal");
  let contactUsBtn = document.getElementById("contactUs");
  let closebtn3 = document.getElementById("close3");

  contactUsBtn.onclick=function(){
    modal3.style.display="flex";
  }

  closebtn3.onclick=function(){
    modal3.style.display="none";
  }

//this is for login 
let modal1 = document.getElementById("loginModal");
let loginbtn = document.getElementById("login");
let closebtn1 = document.getElementById("close1");
loginbtn.onclick=function(){
  modal1.style.display="flex";
}

closebtn1.onclick=function(){
  modal1.style.display="none";
}

  //this is for singup
  let modal2 = document.getElementById("signupModal");
  let signupbtn = document.getElementById("signup");
  let closebtn2 = document.getElementById("close2");
  signupbtn.onclick=function(){
    modal2.style.display="flex";
  }

  closebtn2.onclick=function(){
    modal2.style.display="none";
  }

  //this is for green alert

  let success = document.getElementById("successalert");
  let successclose = document.getElementById("successclose");

  successclose.onclick=function(){
    success.style.display = "none";
  }

 
</script>
</html>



