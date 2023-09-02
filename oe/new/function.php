<?php

function adminlogin() {
?>
<form class="form-inline" name="login" action="login.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail3">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="loginid">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword3">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="pass">
  </div>
  
  <input type="submit" name="submit" class="btn btn-primary" value="Sign in">
</form>

<?php

}









?>