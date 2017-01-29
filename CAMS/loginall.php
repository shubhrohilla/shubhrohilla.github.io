<!DOCTYPE html>
<html>
<?php include "navbar.php"; 

/*
	$type = $_SERVER['REQUEST_URL'];
	while ($type) {
		case 'admin':
			?>
			<style typce="text/css"> #admin{display: block;}</style>
			<style typce="text/css"> #student{display: none;}</style>
			<style typce="text/css"> #proctor{display: none;}</style>
			<style typce="text/css"> #hod{display: none;}</style>
			<?php  
			break;
		case 'student':
			?>
			<style typce="text/css"> #student{display: block;}</style>
			<style type="text/css"> #admin{display: none;}</style>
			<style typce="text/css"> #proctor{display: none;}</style>
			<style typce="text/css"> #hod{display: none;}</style>
			<?php  
			break;
		case 'proctor':
			?>
			<style typce="text/css"> #proctor{display: block;}</style>
			<style type="text/css"> #admin{display: none;}</style>
			<style typce="text/css"> #student{display: none;}</style>
			<style typce="text/css"> #`hod{display: none;}</style>
			<?php  
			break;
		case 'hod':
			?>
			<style typce="text/css"> #`hod{display: block;}</style>
			<style type="text/css"> #admin{display: none;}</style>
			<style typce="text/css"> #proctor{display: none;}</style>
			<style typce="text/css"> #student{display: none;}</style>
			<?php  
			break;
	}*/

?>
<!-- <div class="container"> -->
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-warning">
      <div class="panel-heading">
        <h3 class="panel-title">Head of Department</h3>
      </div>
      <div class="panel-body">
        <div class="col-md -4 col-md-offset-1" >
          <div class="thumbnail">
            <img src="assets/images/hod.png" alt="Head of Department">
              <div class="caption">
                <center>
                  <h3>Head of Department</h3>
                </center>
                <!-- <p>...</p>
                <p>
                  <a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a>
                </p> -->
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <form>
              <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
              <div class="checkbox">
                  <label><input type="checkbox">Remember me</label>
              </div>
              <button type="submit" class="btn btn-warning">Login</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->
</body>
</html>