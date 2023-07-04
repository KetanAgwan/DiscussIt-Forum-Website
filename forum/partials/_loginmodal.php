  
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="Responsive\loginCSS.css">
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

  .btn1{
    margin: 3px;
    height: 50px;
    width: 100px;
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

  .btn1:hover{
   box-shadow: 0px 0px 5px 5px #04F843;
   animation: btnHover 1.5s ease infinite;
 }

 .elements1{
  width: 20vw;
  height: 50vh;
  padding: 40px; 
  position: relative;

}
.close
{
  font-size: 30px;
  font-weight: 5;
  background:transparent;
  color: white;
  border-style: none;
  cursor: pointer;
  float: right;
  margin-right: 5px; 
}

</style> 
</head> 
<body>
  <div id="loginModal" class="modal">
    <div class="elements1">
      <button type="close" class="close" id="close1">&times;</button>
      <form class="form1" method="POST" action="/forum/partials/_handleLogin.php" autocomplete="off"> 
        <span class="form-title"><h2 style="margin-bottom: 8px;">Log in.</h1></span>
          <div>
            <label for="loginEmail">Email:</label><br>
            <input type="email" name="loginEmail" id="loginEmail" class="input-fields">
          </div>
          <div>
            <label for="loginPass">Password:</label><br>
            <input type="password" name="loginPass" id="loginPass" class="input-fields">
          </div>
          <button type="submit" class="btn1" name="submit1">Submit</button>
        </form>
      </div>
    </div>
  </body>
  </html>