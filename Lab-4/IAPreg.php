
<html>

<head>
          
           <title>LAB 1</title>
           <link rel="stylesheet" href="IAPstyle.css"/>
<script src="save.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

          </head>
          <body>

    <form action="processReg.php" method="post">
            <div id="main">
                <div class ="log">   
          	

                <h1>CREATE ACCOUNT</h1>
          		
          			<p>Full Name</p>
            <input type="text" id="fullName" name="fullName" placeholder="Enter Your fullname">

                            <p>Email Address</p>
            <input type="text" id="email" name="email" placeholder="Enter Your Email">

              <p>Password</p>
            
              <input type="password" id = "password" name="password" placeholder="Enter Your Password">
              
              <p>
                <p>Residence</p>
            <input type="text" id="city" name="city" placeholder="Enter Your Residence">
            <br>
<br>
             <p>Profile Photo</p>
    <input type="file" name="image" id="image"><br><br>
    <br>
    <br>

                <input type="submit" name="submit" value="CREATE ACCOUNT">
                <br><br>
                </div>
              </div>
            </form>
          </body>
          </html>



