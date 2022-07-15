<?php
    /*if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
    {*/
?> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/custom.css">
<script src="js/jquery-3.2.0.min.js"/></script>
<script src="js/jquery.dataTables.min.js"/></script>
<script src="js/dataTables.bootstrap.min.js"/></script>
<?php
if (isset($_POST['btnLogin'])) {

	$us = $_POST['txtUsername'];
	$pa = $_POST['txtPass'];
	
    $err = "";
   	if($us=="")
	{
		$err .= "Please do not leave username blank!!!<br/>";
	}
	if($pa=="")
	{
		$err .= "Please do not leave password blank!!!<br/>";
	}

	if($err != ""){
		echo $err;
	}
	else{
		include_once("connection.php");
		$us = mysqli_real_escape_string($conn,$us);
		$pa = htmlspecialchars(mysqli_real_escape_string($conn, $pa));
		$pass = md5($pa);
		$res = mysqli_query($conn, "SELECT Username, Password, state FROM Customer WHERE Username='$us' AND Password='$pass'")
		or die(mysqli_errno($conn));
		$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
		if(mysqli_num_rows($res)==1){				
			$_SESSION["us"] = $us;
			$_SESSION["admin"] = $row["state"];
			echo '<meta http-equiv="refresh" content="0;URL=?page=index.php"/>';
			}
		else{
			echo "Username or password doesn't exist. Please try again!";
			}					
	}
}
?>
<h1>Login</h1>
<form id="form1" name="form1" method="POST" action="">
<div class="form-group">
    <div class="form-group">				    
        <label for="txtUsername" class="col-sm-2 control-label">Username(*):</label>
		<div class="col-sm-6">
		      <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username" value=""/>
		</div>
      </div>  
      
    <div class="form-group">
		<label for="txtPass" class="col-sm-2 control-label">Password(*):  </label>			
		<div class="col-sm-6">
		      	<input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password" value=""/>
		</div>
	</div> 
	<div class="form-group"> 
        <div class="col-sm-2"></div>
        <div class="col-sm-6">
        	<input type="submit" name="btnLogin"  class="btn btn-primary" id="btnLogin" value="Login"/>
            <input type="submit" name="btnCancel"  class="btn btn-primary" id="btnLogin" value="Cancel"/>
			<div><br></div>
		</div>  
	</div>
 </div>
    
</form>
<div>
<H4><a href="?page=register" target="blank">Click here</a> to register!</H4>
</div>
<?php
 
?>