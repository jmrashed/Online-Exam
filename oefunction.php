<?php 

function loginform($error) {
	
	
	?>  
            <div class="col-md-4 col-md-offset-4">
            <h3 class="panel-title" style="color:red"><?php echo $error; ?> </h3>
                <div class="login-panel panel panel-default">
                	
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" name="oeindex.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login-Id" name="loginid" type="text" autofocus>
                                        <?php  	//  if(isset($found))   {  echo "Invalid Username or Password";   }   ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div> 
                                
                                <input type="submit" value="Login" class="btn btn-lg btn-success btn-block" name="submit"> 
                                New User ? <a href="signup.php">Signup Free</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        

<?php
}

?>




















