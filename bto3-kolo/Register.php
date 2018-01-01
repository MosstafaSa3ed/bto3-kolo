<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="css/style.css" rel="stylesheet" />
	</head>
	<body class="bod">
		<h1>Registration</h1>
		<br><br>
		<form onSubmit="return valid()" action="register_ok.php"  method="get" >
			<div class="input-group">
			  <span class="input-group-addon" id="basic-addon1">Username</span>
			  <input type="text" class="form-control" name=" uname" id="uname" placeholder="Username" aria-describedby="basic-addon1">
			</div>
			<br><br>
			<div class="input-group">
			  <span class="input-group-addon">Password</span>
			  <input type="Password" placeholder="Password" name="upass" id="upass" class="form-control" >
			</div>

			<br><br>
			<div class="input-group">
			 <span class="input-group-addon" id="basic-addon2">E-mail</span>
			  <input type="email" class="form-control" id="uemail" name="uemail"placeholder="User's username" aria-describedby="basic-addon2">
			  <span class="input-group-addon" id="basic-addon2">me@example.com</span>
			</div>
			<br><br>
           
			<input type="submit" value="submit" class="btn btn-danger" >			
		</form>
	</body>
</html>

<script>


function valid(){
	var name=document.getElementById("uname").value;
	var pass=document.getElementById("upass").value;
	var email=document.getElementById("uemail").value;
	if( name=="" || pass=="" || email=="")
	{
		alert("fill all fields");
			return false;
	}
	
	 if(pass.lenght>50){
		alert("passwordk twell");
	 	return false;
	 }
	
	alert("success")
	return true;	
}


</script>