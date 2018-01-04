







<!doctype html>
<html>
<head>
<style>

footer{
	background-color:#97ECF7;
	
	color:#2D8CB4;
	text-align:center;
	padding:10px;
	width:100%;
	position:absolute;
	bottom:0px;
}
	
	
.login{
	background-color:#CFCBCB;
	padding:inherit;
	padding:10px;
	text-align:center;
	width:100%;
	border-bottom:solid black;
	height:70%;
	
	
	
	
	
	}
	
	.n{
		background-color:#97ECF7;
		border-bottom:solid black;
		height:70px ;
		text-align:left;
		color:#F49BA9;
		padding:10px;
		width:100%;
	}
	
	.section{font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size:16px;
	
	}
		.content
		{
		
		margin-top:20px;
		
		}
/*table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    
    width: 100%;
	border-top:2px solid black;
	margin-bottom:20px;
	border-bottom:2px solid black;
	
}
th
{
	border-top:2px solid black;
}
th, td {
    padding: 15px;
}	*/

.search
{
margin-left:20px;
margin-bottom:20px;	
}

#logout
{
float:right;

}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sai caterers</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<div class="n">
<a style="font-size:36px; font-family:alexa-std;"><b>SAI CATERERS</b> </a>
<button id="logout" type="button" class="btn btn-primary" ><span class=" glyphicon glyphicon-log-out"></span>&nbsp;Log Out</button>
</div>

<div class="content">
  <form class="form-horizontal form-inline" action="" method="post">
<h2>Records</h2>

<div class="form-groups container">
<div class="row">
<label for="name">Name: </label><input class="form-control" id="name" type="text" name="name">&nbsp;&nbsp;&nbsp;&nbsp;
<label for="status" >Fee Status:</label><select class="form-control" id="status" name="status">
<option value="Paid">Paid</option>
<option value="Unpaid">Un-Paid</option>

</select>
&nbsp;&nbsp;&nbsp;&nbsp;
<label for="year" >Year: </label><select class="form-control" id="year" name="year">
<option value="2017-18">2017-18</option>
<option value="2018-19">2017-18</option>
<option value="2019-20">2017-18</option>
</select>
&nbsp;&nbsp;&nbsp;
<input type="submit" class="button btn-primary form-control" value="Search">
</div>
</div>
</form>

<div class="container">
  <table class="col-lg-12 col-sm-12 col-xs-12 col-md-12 stable-responsive table-bordered table-hover" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Dues</th>
        
     </tr>
    <tr>
            <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Dues</td>
    
    </tr>
      <tr>
            <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>
        <td>Dues</td>
    
    </tr>
  
  
  </table>


</div>

</div>
<footer >
<b>&copy;Developers</b>

</footer>
</body>
</html>
