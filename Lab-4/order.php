<!DOCTYPE html>   
<html>   
<head>  
     <script src="save.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<script language="JavaScript">
    function showInput() {
        document.getElementById('display').innerHTML = 
                    document.getElementById("input").value;
    }
  </script>
  
<title> order </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: orange;   
       width: 100%;  
        color: black;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  

  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {  top: 50%;
  left:50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
  width: 320px;
  height: 450px;  
        background-color: lightblue;  
    }   
</style>   
</head>    
<body>    
    <center> <h1> Place an Order </h1> </center>   
    <form>  
        <div class="container">   
            <label>Food Item: </label>   
            <input type="text" placeholder="Enter Food" name="food" required  id="input" >  
            <label>Number of units : </label>   
            <input type="text" placeholder="Enter Units" name="units" required  id="input2" >  
            <button onclick="showInput()" type="submit">ORDER</button>   
            <label>Your input: </label>
  <p><span id='display'></span></p>
        </div>   
    </form>     
</body>     
</html>  