  <!DOCTYPE html>
<html>
<?php 
	include "navbar.php";
	?>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Register</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-4 col-md-offset-1" >
          <div class="thumbnail">
            <img src="assets/images/RegGuy.png" alt="Proctor">
              <!-- <div class="caption">
                <center>
                  <h3>Proctor</h3>
                </center>
                <p>...</p>
                <p>
                  <a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a>
                </p>
              </div> -->
            </div>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <form>
              <div class="form-group">
                  <label for="inputEmail">First Name</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="First Name">
              </div>
              <div class="form-group">
                  <label for="inputEmail">Last Name</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="Last Name">
              </div>
              <div class="form-group">
                  <label for="inputEmail">Email</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                  <label for="inputEmail">Password</label>
                  <input type="password" class="form-control" id="inputEmail" placeholder="Password">
              </div>
              <div class="form-group">
                  <label for="inputEmail">Roll/Emp ID</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="ID Number">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Ph No</label>
                  <input type="text" class="form-control" id="inputPassword" placeholder="Ph/Mobile No">
              </div>
              <div class="checkbox">
                  <label><input type="checkbox">Remember me</label>
              </div>
              <button type="submit" class="btn btn-default">Register</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>