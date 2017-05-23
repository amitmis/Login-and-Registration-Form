

<!DOCTYPE html>
<html lang="en">



<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

   
    

<body>

<div class="container">
  <h2>Horizontal form</h2>
   
  <form class="form-horizontal" action="db.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username</label>
      <div class="col-sm-10">          
        <input type="username" class="form-control" id="pwd" placeholder="Enter username" name="user">
      </div>
    </div>
      
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
      
       <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="cnfpwd">
      </div>
    </div>
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" value="insert">
		<a href="login.php">Log in</a>
      </div>
    </div>
  </form>
</div>



</body>
</html>
