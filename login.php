
<?php include 'includes/header.php';


?>
<!DOCTYPE html>


<html lang="en">

<body>

<div class="container">
  <h2>Horizontal form</h2>
   
  <form class="form-horizontal" action="log.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="username" placeholder="Enter username" name="user">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
        <button type="submit" class="btn btn-default">Submit</button>
		<a href="register.php">Register</a>
      </div>
    </div>
  </form>
</div>

</body>
</html>

