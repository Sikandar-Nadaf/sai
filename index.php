<!--<?php/*

include("connectivity.php");

function redirect($url)

{

    if (!headers_sent())

    {    

        header('Location: '.$url);

        exit;

        }

    else

        {  

        echo '<script type="text/javascript">';

        echo 'window.location.href="'.$url.'";';

        echo '</script>';

        echo '<noscript>';

        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';

        echo '</noscript>'; exit;

    }

}





if(isset($_POST['submit'])){

	

	$user=$_POST['username'];

	$pass=$_POST['password'];

	

	if(empty($user) ||empty($pass)){

		echo '<script>alert("Please fill User and password!!!");</script>';

	}else{

		

		

		      $query="SELECT * FROM login WHERE username='$user' AND password='$pass'";

		      $sql=mysqli_query($con,$query);

		      if(mysqli_num_rows($sql)>0){

		         $row=mysqli_fetch_array($sql);

				  session_start();

				  $_SESSION['user']=$row['username'];

			  $home="/home.php";

			
	   			$_SESSION['username'] = $username;

        	

			        if($user=='sai')

					redirect($home);

				 			  }else{

				  echo '<script>alert("Please fill Correct Username and Password!!!");</script>';

			  }

			  

			  

		

		

		

	}

	

	

}

mysqli_close($con);
*/
?>

-->





<!doctype html>
<html>
<head>
<style>
footer{
	background-color:#97ECF7;
	
	color:#2D8CB4;
	text-align:center;
	padding:10px;
}
	
	
.login{
	background-color:#CFCBCB;
	padding:inherit;
	padding:10px;
	text-align:center;
	
	border-bottom:solid black;
	
	
	
	
	
	
	}
	
	.n{
		background-color:#97ECF7;
		border-bottom:solid black;
		height:70px ;
		text-align:left;
		color:#F49BA9;
		padding:10px;
		
	}
	
	.section{font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size:16px;
	}
.cnt{
	position:absolute;
	left:50%;
	top:50%;
	width:500px;
	height:300px;
	margin:-150px 0px 0px -250px;
	}
		
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sai caterers</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<style>
.heading
{
width:100%;
text-align:center;
position:relative;
top:-10px;

}



</style>
</head>

<body>
<a href="home.php">Home</a>
<div class="cnt">
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<div class="n">
<h2 class="heading"><a style="font-size:36px; font-family:alexa-std;"><b>SAI CATERERS</b> </a></h2>

</div>
<div class="login">
<a style="font-size:20px; color:#FDFBFB;">login</a>
<form action="" method="POST">
    <div class="section">
       <b>User:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="text" name="username"><br><br>
       <b>Password:</b><input  type="password" name="password"><br><br>
       <input class="btn btn-primary" name="submit" type="submit" value="submit">
      
    </div>
</form>
</div>
<footer >
<b>&copy;Developers</b>

</footer>
</div>
</body>
</html>
