
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
       font-family: Arial, Helvetica, sans-serif;
	   
	   
	color:white;
	background-color:#FF6347;
    padding: 50px;
    margin: 0.35% 23% 0.48% 23%;
	width: auto;
	


	  
	  }
	  
form {
 
	   background-color:#FFEFD5;
	   padding:40px;
	   margin-top:30%;
	   text-shadow: 2px 2px 5px red;
	  }

input[type=text], input[type=password] {
    width: auto;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 18px;
    margin: 16px 0 0 10px;
    align: center;
    border: none;
    cursor: pointer;
    width: auto;
}

button:hover {
   opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}


span.psw {
  float: right;
  padding-top: 16px;
}
a:hover{
		background-color:white;}

<!--
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 40%;
  }
}
 -->
</style>
</head>
<body>



<form action="/action_page.php">


<a href="main.php" ><span style="
								float:left;
								font-size:20px;
								color:white;
								text-shadow: 2px 2px 5px red;
								font-style:oblique;
								"><strong>BloodBud:<strong></span></a>
								
<a href="signup.php" ><span style="
									float:right;
									font-size:20px;
									color:white;
									text-shadow: 2px 2px 5px red;"
										>Sign up</span></a>

  <h2 align="center">Login Form</h2>

 

  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br/>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <br/>
    <button type="submit" align="center" style="margin-left:90px";>Login</button>
    <button type="button" class="cancelbtn">Cancel</button>
	<br>
    <span class="psw">Forgot <a href="#">password?</a></span>
 

  
</form>

</body>
</html>
