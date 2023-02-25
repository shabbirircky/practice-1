<?php include 'header.php'; ?>
<?php include 'Core/user.php'; ?>

<div class="container">

    <div class="row">
        <div class="col-6 offset-3"> 
    <h2 class="text-center mt-5">Register Form :</h2>
    <?php  
    if(isset($_POST[ 'submit'])){
        $user = new user;
        $userCount = $user->checkPreviousUser($_POST['username'] ,$_POST['email']);
        if(count($userCount) > 0){
          echo "<p class='alert alert-danger'>Username/email already exixt</p>";
        }else{
              $user->register($_POST[ 'username'],$_POST[ 'email'],md5($_POST[ 'password']));
              echo "<h2 class='alert alert-info'>Register SUCCESSFULLY</h2>";
        }
    }

    
    ?>

        <form action="" method="POST">

        <label for="exampleInputEmail1" class="form-label" >User Name</label>
    <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">

    
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Register</button>
  <span><a href="login.php" class="btn btn-info">Login</a></span>
</form>


        </div>

    </div>
</div>


<?php include 'footer.php'?>