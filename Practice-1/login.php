<?php include  'header.php' ?>
<?php  include  'Core/user.php' ?>


<div class="container">

    <div class="row">
        <div class="col-6 offset-3"> 
    <h2 class="text-center mt-5">Login  </h2>
    <?php  
    if(isset($_POST[ 'submit'])){
        $user = new user;
        $checkOneUser = $user->checkOneUser($_POST ['username'],$_POST['password']);

        if(count($checkOneUser) == 1){
            $getUserID = $checkOneUser[0]['id'];
            $getUserName = $checkOneUser[0]['username'];
            
            session_start();
            $_SESSION['user_id']= $getUserID;
            $_SESSION['username']= $getUserName;

            header("location:index.php");


        }else{
            echo "<p class='alert alert-danger'>Credintial Does not match</p>";
        }

    }
    ?>
       <form action="" method="POST">

        <label for="exampleInputEmail1" class="form-label" >User Name</label>
    <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">

    
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Login</button>
  <span><a href="register.php"  class="btn btn-danger">Register</a></span>
</form>


        </div>

    </div> 
</div>













<?php include 'footer.php'?>