<!DOCTYPE html>
<html>
<?php include "navbar.php"; 
// function admin()
// {
//   $var = 1;
//   echo "Function is working";;
// }
/*function shubh()
{
  while ($var) {
    case 1:
    { ?>
      <style type="text/css"> #admin{display: block;} #student{display: none;} #proctor{display: none;} #hod{display: none;}</style>
      <?php  
    } break;
    case 'student':
    {  ?>
      <style type="text/css"> #student{display: block;} #admin{display: none;} #proctor{display: none;} #hod{display: none;}</style>
      <?php  
    } break;
    case 'proctor':
    {
      ?>
      <style type="text/css"> #proctor{display: block;} #admin{display: none;} #student{display: none;} #`hod{display: none;}</style>
      <?php  
    } break;
    case 'hod':
    {  ?>
      <style type="text/css"> #`hod{display: block;} #admin{display: none;} #proctor{display: none;} #student{display: none;}</style>
      <?php  
    } break;
  }
}*/
?> 
<div class="change">
<div class="row">
  <div class="col-sm-6 col-md-3  col-md-offset-3">
    <div class="thumbnail">
      <img src="assets/images/admin.png" alt="administrator">
      <div class="caption">
        <center><h3>Administrator</h3></center>
        <p> <a class="btn btn-success" role="button" value="la">Log in</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="assets/images/hod.png" alt="Head Of Department">
      <div class="caption">
        <center><h3>HOD</h3></center>
        <!-- <p>...</p> -->
        <p><a class="btn btn-warning" role="button" value="lh">Log in</a> <a href="#" class="btn btn-default" value="reg" role="button">Assign</a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-3 col-md-offset-3">
    <div class="thumbnail">
      <img src="assets/images/proctor.png" alt="proctor">
      <div class="caption">
        <center><h3>Proctor</h3></center>
        <!-- <p>...</p> -->
        <p><a class="btn btn-info" role="button" value="lp">Log in</a> <a href="#" class="btn btn-default" value="reg" role="button">Assign</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="assets/images/student.png" alt="student">
      <div class="caption">
        <center><h3>Student</h3></center>
        <!-- <p>...</p> -->
        <p><a class="btn btn-danger" role="button" value="ls">Log in</a> <a href="#" class="btn btn-default" value="reg" role="button">Assign</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<div id="response"></div>
<hr>

<div class="row" style="padding: 15px;"> <!--footer-->
  <div class="col-md-3"><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr></div>
  <div class="col-md-1"></div>
  <div class="col-md-4"><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr></div>
  <div class="col-md-1"></div>
  <div class="col-md-3"><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr><hr></div>
</div>
<script type="text/javascript" href="assets/vendor/bootstrap/js/bootstrap.js" ></script>
<script type="text/javascript" href="assets/vendor/bootstrap/js/dropdown-bs.js" ></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<!-- <script type="text/javascript" href="assets/JS/main.js"></script> -->
<script type="text/javascript">
$(document).ready(function(){ 

  $('.btn').click(function(){
    // var change = $(this).parent().parent().parent().parent().parent();
    var val = $(this).attr("value");
    console.log(val);
    if (val=="la") {
      $('.change').html('<div class="row"> <div class="col-md-8 col-md-offset-2"> <div class="panel panel-success"> <div class="panel-heading"><h3 class="panel-title">Administrator</h3></div> <div class="panel-body"> <div class="col-md-4 col-md-offset-1" > <div class="thumbnail"><img src="assets/images/admin.png" alt="administrator"> <div class="caption"><center><h3>Administrator</h3></center><!-- <p>...</p><p><a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a></p> --></div></div></div> <div class="col-md-5 col-md-offset-1"><form> <div class="form-group"><label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail" placeholder="Email"></div> <div class="form-group"><label for="inputPassword">Password</label><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div> <div class="checkbox"><label><input type="checkbox">Remember me</label></div><button type="submit" class="btn btn-success">Login</button></form></div></div></div></div></div>');
    } else if (val=="lh") {
      $('.change').html('<div class="row"> <div class="col-md-8 col-md-offset-2"> <div class="panel panel-warning"> <div class="panel-heading"><h3 class="panel-title">HOD</h3></div> <div class="panel-body"> <div class="col-md-4 col-md-offset-1" > <div class="thumbnail"><img src="assets/images/hod.png" alt="HOD"> <div class="caption"><center><h3>HOD</h3></center><!-- <p>...</p><p><a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a></p> --></div></div></div> <div class="col-md-5 col-md-offset-1"><form> <div class="form-group"><label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail" placeholder="Email"></div> <div class="form-group"><label for="inputPassword">Password</label><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div> <div class="checkbox"><label><input type="checkbox">Remember me</label></div><button type="submit" class="btn btn-warning">Login</button></form></div></div></div></div></div>');
    } else if (val=="lp") {
      $('.change').html('<div class="row"> <div class="col-md-8 col-md-offset-2"> <div class="panel panel-info"> <div class="panel-heading"><h3 class="panel-title">Proctor</h3></div> <div class="panel-body"> <div class="col-md-4 col-md-offset-1" > <div class="thumbnail"><img src="assets/images/proctor.png" alt="Proctor"> <div class="caption"><center><h3>Proctor</h3></center><!-- <p>...</p><p><a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a></p> --></div></div></div> <div class="col-md-5 col-md-offset-1"><form> <div class="form-group"><label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail" placeholder="Email"></div> <div class="form-group"><label for="inputPassword">Password</label><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div> <div class="checkbox"><label><input type="checkbox">Remember me</label></div><button type="submit" class="btn btn-info">Login</button></form></div></div></div></div></div>');
    } else if (val=="ls") {
      $('.change').html('<div class="row"> <div class="col-md-8 col-md-offset-2"> <div class="panel panel-danger"> <div class="panel-heading"><h3 class="panel-title">Student</h3></div> <div class="panel-body"> <div class="col-md-4 col-md-offset-1" > <div class="thumbnail"><img src="assets/images/student.png" alt="Student"> <div class="caption"><center><h3>Student</h3></center><!-- <p>...</p><p><a href="#" class="btn btn-primary" role="button">Register</a> <a href="#" class="btn btn-default" role="button">Log in</a></p> --></div></div></div> <div class="col-md-5 col-md-offset-1"><form> <div class="form-group"><label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail" placeholder="Email"></div> <div class="form-group"><label for="inputPassword">Password</label><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div> <div class="checkbox"><label><input type="checkbox">Remember me</label></div><button type="submit" class="btn btn-danger">Login</button></form></div></div></div></div></div>');
    } else if(val=="reg"){
      $('.change').html('');
    }
  });

});
</script>
</body>
</html>