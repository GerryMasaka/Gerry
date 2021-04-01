<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="save.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


.log{
  width: 320px;
  height: 480px;
  background: black;
  color: orange;
  opacity: 0.85;
  top: 50%;
  left:50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: orange;
  color: black
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
    width: 100%;

}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

1
@media screen and (max-width: 200px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
</head>
<body>

<h2>login</h2>

<form action="processLogin.php" method="post" id="login">
  <div class="imgcontainer">
    <img src="https://www.elegantthemes.com/blog/wp-content/uploads/2017/01/shutterstock_534491617-600.jpg">
  </div>

  <div class="container">
    <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" id="logs" name="email" required>


    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="logs" name="password" required>

    
        
        <button type="submit" name="login" class="btn btn-success">LOGIN</button>

  </div>

  <div class="container" style="background-color:orange">
    <span class="psw"> <a href="http://localhost/IAP/IAPreg.php"> logout</a></span>
  </div>
</form>

</body>
</html>
