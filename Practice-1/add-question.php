<?php include 'header.php';?>
<?php include 'loginCheck.php';?>
<?php include 'navbar.php';?>
<?php include 'Core/question.php';?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2 card">
            <?php 
            if(isset($_POST['submit'])){
                
                $question= new question;
                $question->addQuestion($_POST['Titlle'],$_POST['Description'],$_SESSION['user_id']);
            }
            ?>
         
        <Form class="" action="" method="POST">
            <div class="form-group">
            <label>Question Title </label><br><br>
            <input class="form-control" type="text" name="Titlle" placeholder="Question Name"> 
            </div>
            <div class="form-group">
            <label>Question Details </label><br>
            <textarea class="form-control" id="textarea" type="text" name="Description"></textarea>
            
            </div><br><br>
            <input type="submit" class="btn btn-success" name="submit" value="Add Question">
        
            

        </Form>

        </div>
       

  
    </div>
</div>
            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


            <script type="text/javascript"> 
                   tinymce.init({
                    selector: 'textarea'
                    });
                </script>


<?php include 'footer.php'?>