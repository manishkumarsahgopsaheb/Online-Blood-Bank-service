<?php
$conn=mysqli_connect("localhost","root","","blood");
?>




<html>
<title>sign up</title>
<style>
body{
	
	background-color:#FF6347;
	font-family: Arial, Helvetica, sans-serif;
	color:white;
    padding: 50px;
    margin: 0.35% 23% 0.48% 23%;
	width: auto;
	
	
}
form{
		
		background-color: #FFEFD5;
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

	 
</style>
<body>
<?php

if(isset($_POST['submit'])){
	
$Username=$_POST['username'];	
$Password=$_POST['password'];

$query="insert into signup(Username,Password)values('$username','$password')";
$run=mysqli_query($conn,$query);

if($run){
	echo "you have signed up successfully kindly login to our website";
}
else
{
	echo "error:".mysqli_connect_error($conn);
}
}
?>




<form action="" method="POST">
<div>

<table>
<a href="main.php" ><span style="
								float:left;
								font-size:20px;
								color:white;
								text-shadow: 2px 2px 5px red;
								font-style:oblique;
								text-decoration:underline;"><strong>BloodBud:<strong></span></a>
								
 <h2 align="center">Sign Up Now !</h2>
<tr>
<td>Create Username:</td>
<td><input type="text" name="username" placeholder="Enter Username" required></td>
</tr>

<tr>
<td>Create Password:</td>
<td><input type="password" name="password" placeholder="Enter password" required></td>
</tr>

<tr>
<td>Confirm password:</td>
<td><input type="text" name="signconfirmpass" placeholder="Retype password" required></td>
</tr>

<tr>
<td><button type="submit" align="center">Submit</button>
    <button type="button" class="cancelbtn">Cancel</button>
	</td></tr>`

</table>
</div>
</form>
</body>
</html>