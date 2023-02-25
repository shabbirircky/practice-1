<?php include 'header.php' ?>
<?php
if(!isset($_SESSION['username'])){
    session_start();   
  }
?>


<nav class="df1 bg-warning text-white  m-3">
    <div class="logo"><p class="fs-1">LOGO</p></div>
            <div class="navmenu d-flex">
                

                
                
                <?php if(isset($_SESSION['username'])): ?>
                    <div class="log co-2" > <a href="add-question.php">Add Question</a> </div>

                    <div class="log " > <a href="logout.php">Logout</a><?= $_SESSION['username']."(logout)" ?> </div>
                    
                    
                    <?php else: ?>
                        <div class="log " ><a href="login.php">Login</a></div>
                        <div class="log co-1 " ><a href="register.php">Register</a></div>
                        
                        
                        <?php endif; ?>
                        
                    </div>
                </nav>
                
               
                
                <?php include 'footer.php' ?>