
<?php
session_start();
$uname=$_SESSION["uname"];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/newsStyle.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">
<div style="text-align:center; border-radius:5px;">
<span style="font-size:36px;color:#D90000;"> <?php echo " $uname"; ?></span >
</div></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="newsFeed.php">News</a></li>
		 <li><a href="index.php">LogOut</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="brdr">
	
     <div class="form-group posts">
      <form action="add_post.php"  method="get">
     <label >New Post!!</label>
      <input type="text" class="form-control" name="post"   placeholder="what's in your mind ya creative">
      <button type="submit" class="btn btn-primary">Post</button>
      </form>
    </div>
	








<script src="js/jquery-3.2.1.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

</body>
</html>


<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "bto3-kolo");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM posts WHERE uname='$uname'";
$posts= $conn->query($sql);
if ( $posts== TRUE) {
	while ($row = mysqli_fetch_array($posts))  
	{
		$ID=$row["ID"];
		 echo "<div style='margin:3%;
	padding:2%;
	border:rgb(51,0,51) dashed 1px;'>
	<h3> " . $uname . "</h3><p>" .$row['post'] . "</p>
	<div class=\"btn-group\">
          <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" 				   				aria-expanded=\"false\">
            bom bom <span class=\"caret\"></span>
          </button>
           <ul class=\"dropdown-menu\">
            <li><a href=\"delete.php?id=$ID\">Delete</a></li>
            <li data-toggle=\"modal\" data-target=\".bs-example-modal-lg\"><a href=\"update.php?id=$ID\"> update </a></li>
          </ul>
        </div> </div>
		
		";
	}
} else {
    echo "Error: jnkj";
}







?>
