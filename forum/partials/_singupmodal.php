   
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Responsive\signupCSS.css">
 <style type="text/css">
   *{
    margin: 0px;
    padding: 0px;
  }
  
  .modal {
    display: none;
    position: fixed; 
    z-index: 7; 
    width: 100vw;
    height: 120vh; 
    top: 40%;
    left: 50%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.6); 
    align-items: center;
    justify-content: center;
  }



  .form2{
    padding: 8px;
    color: white; 
    border-radius: 8px;
    box-shadow: 3px 3px 5px black;
    background: #2C3E50;
  }

  .btn2{
    height: 50px;
    width: 100px;
    margin: 3px;
    background:#DC7633;
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
  .btn2:hover{
    box-shadow: 0px 0px 5px 5px #04F843;
    animation: btnHover 1.5s ease infinite;
  }
  .elements2{
    width: 20vw;
    height: 40vh;
    padding: 40px;
    position: relative;

  }
  .close
  {
    font-size: 30px;
    font-weight: 5;
    background:transparent;
    color: black;
    border-style: none;
    cursor: pointer;
    float: right;
    margin-right: 5px;
  }

</style>
</head>
<body>
  <div id="signupModal" class="modal"> 
    <div class="elements2">
      <button class="close" id="close2">&times;</button> 
      <form class="form2" method="POST" action="/forum/partials/_handleSignup.php" autocomplete="off"> 
        <div class="form-title"><h2 style="margin-bottom: 8px;">Sign Up.</h1></div>
          <div>
            <label for="signupUserName">User Name:</label><br>
            <input type="text" name="signupUserName" id="signupUserName" class="input-fields">
          </div>
          <div>
            <label for="signupEmail">Email:</label><br>
            <input type="email" name="signupEmail" id="signupEmail" class="input-fields">
          </div>
          <div>
            <label for="signupPassword">Password:</label><br>
            <input type="password" name="signupPassword" id="signupPassword" class="input-fields">
          </div>
          <div>
            <label for="signupcPassword">Confirm Password:</label><br>
            <input type="password" name="signupcPassword" id="signupcPassword" class="input-fields">
          </div>
          <button type="submit" class="btn2" name="submit2">Submit</button>
        </form>
      </div>
    </div>
  </body>
  </html>